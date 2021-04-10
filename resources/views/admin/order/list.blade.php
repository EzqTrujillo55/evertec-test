{{ $user = auth()->user()->role}}
    @if($user=="ADMIN")
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Order History
        </h2>
        @forelse($orders as $order)
            <div class="max-w-xs rounded overflow-hidden shadow-lg my-2">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{$order->name}}</div>
                        <p> {{$order->email}} </p>
                        <p> {{$order->mobile}} </p>
                        
                    </div>               
            </div>                           
        @empty
            <p>No products</p>
        @endforelse
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    </div>
</x-app-layout>
 
    @else 
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Unauthorized
          <a href="/client">Go Back</a>
        </h2>
@endif
