<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

route::get('/login', [AuthController::class, 'login_page' ])->name('login');
route::get('/register', [AuthController::class, 'register_page'])->name('register');

route::post('/logout', [AuthController::class, 'logout' ])->name('logout')->middleware('auth');

route::post('/auth-login', [AuthController::class, 'login_user' ]);
route::post('/auth-register', [AuthController::class, 'register_user' ]);

route::get('/', [ProductsController::class, 'products_page']);

route::get('/products', [ProductsController::class, 'products_page']);

route::get('/manage-products', [ProductsController::class, 'manage_products_page'])->middleware('auth');

route::get('/new-product', [ProductsController::class, 'new_products_page'])->middleware('auth');

route::post('/create-product', [ProductsController::class, 'create_product'])->name('create_product')->middleware('auth');

route::get('/update-product/{id}', [ProductsController::class, 'update_product_page'])->middleware('auth');

route::put('/submit-update/{id}', [ProductsController::class, 'submit_update'])->name('submit_update')->middleware('auth');

route::delete('/delete-product/{id}', [ProductsController::class, 'delete_product'])->name('delete_product')->middleware('auth');