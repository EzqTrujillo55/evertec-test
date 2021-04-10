{{ $user = auth()->user()->role}}
    @if($user=="CLIENT")
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           New Order
        </h2>
    </x-slot>
       
	<div class='max-w-lg mt-4 bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
		<div class="py-4 px-8 mt-3">
			<div class="flex flex-col mb-8">
				<h2 class="text-gray-700 font-semibold text-2xl tracking-wide mb-2">Resume Order</h2>
				<p class="text-gray-500 text-base"> Product: {{$product->name}}</p>
                <p class="text-gray-500 text-base"> Price: ${{$product->price}}</p>
                <p class="text-gray-500 text-base"> Total: ${{$product->price}}</p>
			</div>
			<div class="bg-gray-100 rounded-lg">
				<div class="py-4 px-4">
					<div class="flex flex-col">
						<h4 class="text-lg font-semibold mb-3">Customer Info</h4>
						<div class="flex flex-col text-sm text-gray-500">
							<span class="mb-1">{{$orderInfo->name}}</span>
							<span class="mb-1">{{$orderInfo->email}}</span>
							<span class="mb-1">{{$orderInfo->mobile}}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="py-4">
				<a href="{{route('createRequest')}}" class="block tracking-widest uppercase text-center shadow bg-indigo-600 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">
                    Checkout
                </a>
			</div>
		</div>
	</div>

        
            
           
        
    
</x-app-layout>
 
    @else 
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Unauthorized
          <a href="/admin/orders">Go Back</a>
        </h2>
@endif







