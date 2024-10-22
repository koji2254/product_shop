@include('components.NavBar')

<section class="w-full">
    <div class="mx-2 m-auto p-2">
        <div class="flex gap-2 items-center">
            <h1 class="px-2 font-mono uppercase p-1 text-blue-500 font-semibold">
                @auth
                {{ auth()->user()->name }}
                @endauth
                <i class="fa-regular fa-user"></i>
            </h1>
            <div class="">
                <a href="new-product" class="bg-green-600 hover:bg-green-400 px-2 text-sm border text-white rounded p-1">Create new product</a>
            </div>
        </div>
        
        <div class="cards-container mt-2 grid grid-cols-2 md:grid-cols-3 gap-3">
            @if ($products->count() > 0)
                @foreach ($products as $product)
                    <div class="card border rounded p-2 w-full bg-gray-100 flex flex-col gap-2">
                    <p class="font-semibold text-lg font-mono">
                       <a href="update-product/{{ $product->product_id }}">{{ $product->product_title }} </a>
                    </p>
                    <p class="rounded text-xs">
                       <span>Quantity</span> <span class="bg-red-50 text-red-700 rounded-full p-2">{{ $product->qty }}</span></p>
                    </div>    
                @endforeach
            @else
                <h1 class="font-bold text-2xl">No Products Found</h1>
            @endif
        </div>
    </div>
</section>

</body>
</html>