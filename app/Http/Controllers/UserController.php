<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function all() {
        return User::all();
    }

    public function me()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect('/admin');
        }
        return Auth::user();
    }
}
