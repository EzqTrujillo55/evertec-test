{{ $user = auth()->user()->role}}
    @if($user=="CLIENT")
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Our Products
        </h2>
    </x-slot>

    
        <div class="flex flex-row max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @forelse($products as $product)
            <div class="max-w-xs rounded overflow-hidden shadow-lg my-2">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{$product->name}}</div>
                        <p> ${{$product->price}} </p>
                        <a href="{{route('client.order.new', $product->id)}}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold  px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Buy Now
                        </a>
                    </div>               
            </div>                           
        @empty
            <p>No products</p>
        @endforelse   
        </div>
</x-app-layout>
 
    @else 
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Unauthorized
          <a href="/admin/orders">Go Back</a>
        </h2>
@endif








