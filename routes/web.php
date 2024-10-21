<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

route::get('/login', [AuthController::class, 'login_page' ]);
route::get('/register', [AuthController::class, 'register_page' ]);

route::post('/auth-login', [AuthController::class, 'login_user' ]);
route::post('/auth-register', [AuthController::class, 'register_user' ]);

route::get('/', [ProductsController::class, 'products_page']);

route::get('/products', [ProductsController::class, 'products_page']);