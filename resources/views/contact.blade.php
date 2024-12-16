@extends('layouts.base')

@section('content')

<main class="contact-container">
    <div class="contact-content">
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5090.342905475836!2d3.5179850770216676!3d50.36335739363032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edc441763c5b%3A0x4de5666a6bd319cc!2sLYCEE%20WALLON!5e0!3m2!1sfr!2sfr!4v1733242564251!5m2!1sfr!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-info">
            <div class="logo-container">
                <ion-icon name="school-outline"></ion-icon>
                <h2>Le lycée Henri Wallon</h2>
            </div>
            <p class="address">16 Pl. de la République,<br>59300 Valenciennes</p>
        </div>
    </div>
</main>

@vite(['resources/css/contact.css'])

@endsection
