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

Route::get('/users', [\App\Http\Controllers\AuthController::class, 'getUsers'])
->middleware(\App\Http\Middleware\CheckRole::class);

Route::get('/users/me', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        return redirect('/admin');
    }
    return \Illuminate\Support\Facades\Auth::user();
});

Route::get('/admin', function () {
    return view('admin');
})->middleware(\App\Http\Middleware\CheckRole::class);
