<div class="burger-menu">
    <ion-icon name="menu-outline"></ion-icon>
</div>
<div class="left">
    <a href="/"><img src="/logo-wallon.png" alt="Logo du lycée Henri-Wallon de Valenciennes." /></a>
    <ul class="nav-links">
        <li><a href="/"><ion-icon name="home-outline"></ion-icon>Accueil</a></li>
        <li><a href="/products" class="active"><ion-icon
                    name="pricetag-outline"></ion-icon>Produits</a></li>
        <li><a href="/src/pages/contact.html"><ion-icon name="call-outline"></ion-icon>Contact</a></li>
        <li><a href="/src/pages/panier.html"><ion-icon name="bag-handle-outline"></ion-icon>Votre panier</a>
        </li>
        @if(auth()->user())
            <li><a href="{{ url('/users/me') }}"><ion-icon name="person-outline"></ion-icon>{{ auth()->user()->name }}</a></li>
        @else
        <li><a href="/auth/login"><ion-icon name="person-outline"></ion-icon>Connexion</a></li>
        @endif
        <li><ion-icon name="sunny-outline"></ion-icon></li>
    </ul>
</div>
