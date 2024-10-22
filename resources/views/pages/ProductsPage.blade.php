
@include('components.NavBar')
   <section class="w-full">
      <div class="mx-2 m-auto p-2">
         <h1 class="font-mono p-2 text-gray-700 font-bold">
           All Products
         </h1>
         <div class="cards-container  mt-3 grid grid-cols-2 md:grid-cols-3 gap-3">
            @if ($products->count() <= 0)
            <h1 class="font-bold text-2xl">No Products Found</h1>
            @else
                  @foreach ($products as $product)
                  <div class="card border rounded p-2 w-full bg-gray-100 flex flex-col gap-2">
                     <p class="font-semibold text-lg font-mono">
                        {{ $product->product_title }}
                     </p>
                     <p class="rounded text-xs">
                        <span>Quantity</span> <span class="bg-red-50 text-red-700 rounded-full p-2">{{ $product->qty }}</span></p>
                     </div>     
                  @endforeach
            @endif
         </div>
      </div>
   </section>


</body>
</html>