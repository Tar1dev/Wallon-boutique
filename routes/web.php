<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

Route::get('/auth/login', [\App\Http\Controllers\AuthController::class, 'login_view'])->name('auth.login_view');
Route::post('/auth/login', [\App\Http\Controllers\AuthController::class, 'doLogin'])->name('auth.login');

Route::get('/auth/register', [\App\Http\Controllers\AuthController::class, 'register_view'])->name('auth.register_view');
Route::post('/auth/register', [\App\Http\Controllers\AuthController::class, 'doRegister'])->name('auth.register');

Route::get('/users', [\App\Http\Controllers\UserController::class, 'all'])
->middleware(\App\Http\Middleware\CheckRole::class);

Route::get('/users/me', [\App\Http\Controllers\UserController::class, 'me']);

Route::get('/admin', function () {
    return view('admin');
})->middleware(\App\Http\Middleware\CheckRole::class);
