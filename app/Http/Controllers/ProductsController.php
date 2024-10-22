<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products_page(){
        
        $products = Products::all();

        return view('pages.ProductsPage', ['products' => $products]);
    }
   
    public function new_products_page(){

   

        return view('pages.NewProduct');
    }

    public function manage_products_page(){

        $user_id = Auth::user()->user_id;

        $products = Products::where('user_id', $user_id)->get();

        return view('pages.ManageProducts', ['products' => $products]);
    }


    public function update_product_page($id){
        // dd();
        $product = Products::where('product_id', $id)->first();

        // dd($product);
        return view('pages.EditProduct', ['product' => $product]);
    }



    public function create_product(Request $request){

        $request->validate([
            'product_title' => 'required',
            'sku_code' => 'required',
            'qty' => 'required',
        ]);

        // dd($request);

        # Generate a random ID for product_id
        $rand_id = rand(1300990499, 9999999999);

        $product = Products::create([
            'product_title' => $request->product_title,
            'sku_code' => $request->sku_code,
            'qty' => $request->qty,
            'user_id' => Auth::user()->user_id,
            'product_id' => $rand_id,
        ]);
        
        return redirect('/manage-products');
    }


    public function submit_update(Request $request, $id){
      
        $request->validate([
            'product_title' => 'required',
            'sku_code' => 'required',
            'qty' => 'required',
        ]);

        $product = Products::where('product_id', $id)->firstOrFail();
    
        $user_id = Auth::user()->user_id;

        if($product && ($product->user_id === $user_id)){
            
            $product->update([
                'product_title' => $request->product_title,
                'sku_code' => $request->sku_code,
                'qty' => $request->qty,
            ]);

            return redirect('/manage-products');
        }

        
        return redirect('/manage-products')->with('message', 'Not Authorised');
        
    }


    public function delete_product($id){

        $product = Products::where('product_id', $id)->firstOrFail();

        $product->delete();

        return redirect('/manage-products');
    }

}
