<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil - Lycée Henri Wallon</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/profile.css" />
</head>

<body>
    <div class="menu-overlay"></div>
    <header>
        @include('nav')
    </header>

    <main class="profile-container">
        <div class="profile-content">
            <div class="profile-header">
                <ion-icon name="person-circle-outline"></ion-icon>
                <h2>{{ auth()->user()->name }} {{ auth()->user()->first_name }}</h2>
                <p class="user-info">{{ auth()->user()->class_level }} {{ auth()->user()->class_number }} • {{ auth()->user()->email }}</p>
            </div>

            <div class="profile-sections">
                <section class="orders-section">
                    <h3><ion-icon name="bag-check-outline"></ion-icon>Mes commandes</h3>
                    <div class="order-placeholder">
                        <p>Aucune commande pour le moment</p>
                    </div>
                </section>

                <section class="settings-section">
                    <h3><ion-icon name="settings-outline"></ion-icon>Paramètres</h3>
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

    <script src="/js/theme.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
