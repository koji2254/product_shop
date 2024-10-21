<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products_page(){

        return view('pages.ProductsPage');
    }
   
    public function new_product_page(){

        return view('pages.NewProduct');
    }

    public function manage_products_page(){

        return view('pages.ManageProducts');
    }

    public function edit_products_page(){

        return view('pages.ManageProducts');
    }





    
}
