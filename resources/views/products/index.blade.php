@extends('layouts.base')

@section('content')

<main>
    <div class="categories">
        <button class="category-link active" data-category="all">
            <ion-icon name="grid-outline"></ion-icon>
            Tous
        </button>
        <button class="category-link" data-category="viennoiseries">
            <ion-icon name="game-controller-outline"></ion-icon>
            Viennoiseries
        </button>
        <button class="category-link" data-category="tasses">
            <ion-icon name="cafe-outline"></ion-icon>
            Tasses
        </button>
        <button class="category-link" data-category="tshirts">
            <ion-icon name="shirt-outline"></ion-icon>
            T-shirts
        </button>
        <button class="category-link" data-category="pulls">
            <ion-icon name="shirt-outline"></ion-icon>
            Pulls
        </button>
    </div>

    <div class="products-grid">
        @foreach($products as $product)
            <div class="product-card">
                <img width="100" src="{{ $product->image }}" alt="${product.name}"/>
                <h3>{{ $product->name }}</h3>
                <p class="price">{{ $product->price }}€</p>
                <div class="product-details">

                    <a href="{{ route('panier.add') }}?productId={{ $product->id }}&quantity=1" class="add-to-cart">
                        <ion-icon name="cart-outline"></ion-icon>
                        Ajouter au panier
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</main>

@if(isset($message))
    <div class="message-success">
        {{ $message }}
    </div>
@endif


@vite(['resources/css/products.css', 'resources/js/products/js'])

    @error('validated')
    <p class="login-error">{{ $validated->errors() }}</p>
    @enderror
@endsection
