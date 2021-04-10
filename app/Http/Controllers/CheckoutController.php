<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CheckoutController extends Controller
{
    public function createRequest()
    {
        $client = new Client();
        $url = "https://dev.placetopay.com/redirection/api/session";

        $params = [
           "auth" =>  [
            "login" => "6dd490faf9cb87a9862245da41170ff2",
            "tranKey" => "024h1IlD",
            'nonce' => base64_encode('c9085e82debb82b0955579098be3d7ca'),
            'seed' => date_default_timezone_set('UTC'),
            ],
            "locale" => "en_CO",
            "buyer" => [
              "name" => "Deion",
              "surname" =>  "Ondricka",
              "email" =>  "dnetix@yopmail.com",
              "document" => "1040035000",
              "documentType" => "CC",
              "mobile" => 3006108300
            ],
            "payment"=> [
                "reference" => "3210",
                "description" => "Pago básico de prueba 04032019",
                "amount" => [
                    "currency" =>"COP",
                    "total" => "10000"
                ],
              "allowPartial" => false
            ],
        
            "expiration" => "2021-04-09T20:55:00-05:00",
            "returnUrl" => "https://mysite.com/response/3210",
            "ipAddress" =>"127.0.0.1",
            "userAgent" => "PlacetoPay Sandbox"
        ];

        $headers = [
           'Content-Type' => 'application/json'
        ];

        $response = $client->post($url, [
            'json' => $params,
            'headers' => $headers,
        ]);

        $responseBody = json_decode($response->getBody());

        return view('client.order.checkout', compact('responseBody'));
    }

}