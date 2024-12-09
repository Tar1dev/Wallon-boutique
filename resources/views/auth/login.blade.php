@extends('layouts.base')

@section('content')

<main class="auth-container">
    <div class="auth-content">
        <div class="auth-image">
            <img src="../../login.png" alt="Illustration du lycée"/>
        </div>
        <div class="auth-form">
            <h2>Heureux de vous revoir !</h2>
            <form action="{{ route('auth.login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="alex@wallon.com" required autocomplete="on"
                           name="email"/>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="password-input">
                        <input type="password" id="password" placeholder="Entrez votre mot de passe" required
                               autocomplete="on" name="password"/>
                        <button type="button" class="toggle-password">
                            <ion-icon name="eye-outline"></ion-icon>
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="checkbox-container" style="display: flex;">
                        <input type="checkbox" id="remember"/>
                        <span class="checkmark"></span>
                        <span>Se souvenir de moi</span>
                    </label>

                    <button type="submit" class="submit-btn">Se connecter</button>
                    <div class="login-error" hidden></div>
                    @error("error")
                    <p class="login-error">{{ $message }}</p>
                @enderror
            </form>

            <p class="auth-switch">
                Pas encore de compte ? <a href="register">S'inscrire ici</a>
            </p>
        </div>
    </div>
</main>

@vite(['resources/css/login.css', 'resources/js/password-toggle.js'])

@endsection
