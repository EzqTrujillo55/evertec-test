{{ $user = auth()->user()->role}}
    @if($user=="CLIENT")
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           New Order
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h2>Order Status</h2>
        <h3> {{$orderInfo->name}} </h3>
    </div>
</x-app-layout>
 
    @else 
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Unauthorized
          <a href="/admin/orders">Go Back</a>
        </h2>
@endif
