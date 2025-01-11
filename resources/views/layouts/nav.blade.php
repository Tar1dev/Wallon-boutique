<div class="menu-overlay"></div>
<div class="burger-menu">
    <ion-icon name="menu-outline"></ion-icon>
</div>
<div class="left">
    <a href="/"><img src="/logo-wallon.png" alt="Logo du lycée Henri-Wallon de Valenciennes." /></a>
    <ul class="nav-links">

        <x-nav-link href="/" :active="request()->is('/')"><ion-icon name="home-outline"></ion-icon>Accueil</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')"><ion-icon name="call-outline"></ion-icon>Contact</x-nav-link>
        <x-nav-link href="/products" :active="request()->is('products*')"><ion-icon name="pricetag-outline"></ion-icon>Produits</x-nav-link>
        <x-nav-link href="/panier" :active="request()->is('panier*')"><ion-icon name="bag-handle-outline"></ion-icon>Votre panier</x-nav-link>
        @if(auth()->check())
            <x-nav-link href="/users/me" :active="request()->is('auth*')"><ion-icon name="person-outline"></ion-icon>{{ auth()->user()->name }}</x-nav-link>
        @else
            <x-nav-link href="/auth/login" :active="request()->is('auth*')"><ion-icon name="person-outline"></ion-icon>Connexion</x-nav-link>
        @endif
        <li><ion-icon name="sunny-outline"></ion-icon></li>
    </ul>
</div>
