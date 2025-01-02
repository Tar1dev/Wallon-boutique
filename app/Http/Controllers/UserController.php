<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function all() {
        return User::all();
    }

    public function me()
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                return redirect('/admin');
            }
            return view('profile');
        }
        return redirect()->route('home');
    }
}
