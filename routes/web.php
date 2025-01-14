<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

// Auth
Route::get('/auth/login', [\App\Http\Controllers\AuthController::class, 'login_view'])->name('auth.login_view');
Route::post('/auth/login', [\App\Http\Controllers\AuthController::class, 'doLogin'])->name('auth.login');
Route::get('/auth/register', [\App\Http\Controllers\AuthController::class, 'register_view'])->name('auth.register_view');
Route::post('/auth/register', [\App\Http\Controllers\AuthController::class, 'doRegister'])->name('auth.register');
Route::get('/auth/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

// Users
Route::get('/users', [\App\Http\Controllers\UserController::class, 'all'])
->middleware(\App\Http\Middleware\CheckRole::class);
Route::get('/users/me', [\App\Http\Controllers\UserController::class, 'me']);

// Admin
Route::get('/admin', function () {
    return view('admin');
})->middleware(\App\Http\Middleware\CheckRole::class);


Route::get("/contact", function () {
    return view('contact');
})->name('contact');

// Cart
Route::get('/panier', [\App\Http\Controllers\CartController::class, 'getCart'])->name('panier');
Route::get('/panier/add', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('panier.add');
Route::get('/panier/remove', [\App\Http\Controllers\CartController::class, 'removeFromCart'])->name('panier.remove');


Route::get('/orders', [\App\Http\Controllers\OrderController::class, 'getOrders'])->name('orders.index');
Route::get('/orders/show/{id}', [\App\Http\Controllers\OrderController::class, 'getOrder'])->name('orders.one');
Route::get('/orders/new', [\App\Http\Controllers\OrderController::class, 'newOrder'])->name('orders.new');
