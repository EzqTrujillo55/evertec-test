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
        <h4 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Product: {{$selectedProduct->name}}</h4>
        <h4 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Price: ${{$selectedProduct->price}}</h4>
        <h4 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Customer Info</h4>
       
        <form action="{{route('orders.store')}}" method="POST" class="w-full max-w-lg">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Name
                </label>
                <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="text" placeholder="Jane">
                
                </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Email
      </label>
      <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Mobile
      </label>
      <input name="mobile" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="number" placeholder="0998131014">
    </div>
  </div>
  <input type="hidden" name="product_id"  value={{$selectedProduct->id}} />
  <input type="hidden" name="user_id"  value={{auth()->user()->id}} />
  <button id="btn-add" class="bg-blue-500 hover:bg-blue-400 text-white font-bold  px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
    Confirm Order
  </button>


</form>
           
        </div>
    </div>
</x-app-layout>
 
    @else 
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Unauthorized
          <a href="/admin/orders">Go Back</a>
        </h2>
@endif





