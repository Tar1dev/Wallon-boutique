<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_view() {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
         $creds = $request->validated();
         if(Auth::attempt($creds)) {
             $request->session()->regenerate();
             return redirect()->route('products.index');
         }

         return to_route('auth.login')->withErrors([
             "error" => "Mauvais utilisateur ou mot de passe !"
         ])->onlyInput('email');
    }

    public function register_view() {
        return view('auth.register');
    }

    public function doRegister(RegisterRequest $request) {

        $validated = $request->validated();


        $user = User::create([
            'email' => $validated['email'],
            'name' => $validated['name'],
            'first_name' => $validated['first_name'],
            'class_level' => $validated['class_level'],
            'class_number' => $validated['class_number'],
            'password' => Hash::make($validated['password']),
        ]);

        $request->session()->regenerate();
        return redirect()->route('products.index');
    }

}