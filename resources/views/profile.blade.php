@extends('layouts.base')

@section('content')

<main class="profile-container">
    <div class="profile-content">
        <div class="profile-header">
            <ion-icon name="person-circle-outline"></ion-icon>
            <h2>{{ auth()->user()->name }} {{ auth()->user()->first_name }}</h2>
            <p class="user-info">{{ auth()->user()->class_level }} {{ auth()->user()->class_number }}
                • {{ auth()->user()->email }}</p>
        </div>

        <div class="profile-sections">
            <section class="orders-section">
                <h3>
                    <ion-icon name="bag-check-outline"></ion-icon>
                    Mes commandes
                </h3>
                <div class="order-placeholder">
                    <p>Aucune commande pour le moment</p>
                </div>
            </section>

            <section class="settings-section">
                <h3>
                    <ion-icon name="settings-outline"></ion-icon>
                    Paramètres
                </h3>
                <div class="settings-options">
                    <button class="settings-btn">
                        <ion-icon name="create-outline"></ion-icon>
                        Modifier le profil
                    </button>
                    <button class="settings-btn">
                        <ion-icon name="key-outline"></ion-icon>
                        Changer le mot de passe
                    </button>
                    <a class="settings-btn logout" href="{{ route('auth.logout') }}">
                        <ion-icon name="log-out-outline"></ion-icon>
                        Se déconnecter
                    </a>
                </div>
            </section>
        </div>
    </div>
</main>

    @vite(['resources/css/profile.css'])

@endsection
