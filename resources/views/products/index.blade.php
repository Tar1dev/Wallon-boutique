<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produits - Lycée Henri Wallon</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/products.css" />
</head>

<body>
    <div class="menu-overlay"></div>
    <header>
        @include('nav')
    </header>

    <main>
        <div class="categories">
            <button class="category-link active" data-category="all">
                <ion-icon name="grid-outline"></ion-icon>Tous
            </button>
            <button class="category-link" data-category="viennoiseries">
                <ion-icon name="game-controller-outline"></ion-icon>Viennoiseries
            </button>
            <button class="category-link" data-category="tasses">
                <ion-icon name="cafe-outline"></ion-icon>Tasses
            </button>
            <button class="category-link" data-category="tshirts">
                <ion-icon name="shirt-outline"></ion-icon>T-shirts
            </button>
            <button class="category-link" data-category="pulls">
                <ion-icon name="shirt-outline"></ion-icon>Pulls
            </button>
        </div>

        <div class="products-grid">
            @foreach($products as $product)
                <div class="product-card">
                    <img width="100" src="{{ $product->image }}" alt="${product.name}" />
                    <h3>{{ $product->name }}</h3>
                    <p class="price">{{ $product->price }}€</p>
                    <div class="product-details">

                        <button class="add-to-cart">
                            <ion-icon name="cart-outline"></ion-icon>
                            Ajouter au panier
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="contact">
                <h3>Contact :</h3>
                <ul>
                    <li><ion-icon name="mail-outline"></ion-icon><a
                            href="mailto:maildulycee@gmail.com">maildulycee@gmail.com</a></li>
                    <li><ion-icon name="logo-instagram"></ion-icon><a href="https://instagram.com/insta">@insta</a></li>
                    <li><ion-icon name="game-controller-outline"></ion-icon><a href="#">nsicorp-lien</a></li>
                    <li><ion-icon name="call-outline"></ion-icon><span>03 *****</span></li>
                </ul>
            </div>
            <img src="/logo-wallon.png" alt="Logo Henri Wallon" class="footer-logo" />
        </div>
    </footer>

    <script src="js/theme.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
