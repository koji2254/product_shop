@include('components.NavBar')

<section class="w-full">
   <div class="mx-2 m-auto p-2">
     <h1 class="bg-gray-100 p-2 text-blue-500 font-bold">
         Create New Product
     </h1>
      <div class="cards-container mt-2 m-auto w-full md:w-8/12">
         
         <form action="{{ route('create_product') }}" class="w-full" method="POST">
            @csrf

            <!-- Email Input -->
            <div class="">
               <label for="product_title" class="text-sm non-italic">Product Title</label>
               <input class="w-full p-1 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" 
                      type="text" name="product_title" value="{{ old('product_title') }}">
               @error('product_title')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
               @enderror
            </div>

            <!-- SKU CODE -->
            <div class="mt-2">
               <label for="sku_code" class="text-sm non-italic">SKU CODE</label>
               <input class="w-full p-1 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" 
                      type="text" name="sku_code">
               @error('sku_code')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
               @enderror
            </div>

            <!-- SKU CODE -->
            <div class="mt-2">
               <label for="qty" class="text-sm non-italic">Product Quantity</label>
               <input class="w-full p-1 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" 
                      type="number" name="qty">
               @error('qty')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
               @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-3">
               <button class="w-full p-2 h-10 bg-blue-900 rounded text-white font-semibold hover:bg-blue-950">
                  Create Product
               </button>
            </div>
         </form>
      </div>
   </div>
</section>


</body>
</html>