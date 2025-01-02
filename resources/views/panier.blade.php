@extends('layouts.base')

@section('content')

    <main class="cart-container">
        <h1>Votre panier</h1>


        <div class="cart-content">
            <div class="cart-items">
                @foreach($cart->products as $product)
                    <div class="cart-item">
                        <img src="{{ $product["image"] }}" alt="Produit" />
                        <div class="item-details">
                            <div class="item-header">
                                <h3>{{ $product["name"] }}</h3>
                                <a class="delete-btn" href="{{ route('panier.remove') }}?productId={{ $product["id"] }}&quantity=1">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </a>
                            </div>
                            @if(isset($product["size"]))
                                <p>Taille : $cart_object["product"]["size"]</p>
                            @endif
                            <p>Quantité : {{ $product->pivot->quantity }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="cart-summary">
                <div class="summary-line">
                    <span>Remises :</span>
                    <button class="add-discount">Ajouter</button>
                </div>
                <div class="summary-line">
                    <span>Sous-total :</span>
                    <span>XX.XX€</span>
                </div>
                <div class="summary-line total">
                    <span>Total :</span>
                    <span>XX.XX€</span>
                </div>
                <button class="validate-order">
                    <ion-icon name="mail-outline" style="color: white"></ion-icon>
                    Valider la commande
                </button>
                <p class="order-note">La validation vous permettra d'obtenir un bon de commande à présenter le jour de
                    la récupération de votre commande.</p>
                <p class="payment-note">Le paiement aura lieu en chèque ou en espèce au même moment.</p>
            </div>
        </div>
    </main>
    @vite(['resources/css/panier.css', 'resources/js/panier.js'])
@endsection
