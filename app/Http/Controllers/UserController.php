<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use function Termwind\render;

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
