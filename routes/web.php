<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





Route::get('/client', [ProductController::class, 'index']);
Route::get('client/order/new/{selectedProduct}',  [OrderController::class, 'create'])->name('client.order.new');
Route::resource("orders", OrderController::class);

Route::get('client/order/status', function() {
    return view('client.order.status');
})->name('client.order.status');

Route::get('admin/orders', [OrderController::class, 'index']); 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = auth()->user();
    if($user->role == 'CLIENT'){
        return redirect('/client');
    }

    if($user->role == "ADMIN"){
        return redirect('admin/orders');
    }
})->name('dashboard');

Route::prefix('checkout')->group(function () {
    Route::get('createRequest', [CheckoutController::class, 'createRequest'])->name('createRequest');
});