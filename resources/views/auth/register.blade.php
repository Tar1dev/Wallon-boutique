<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription - Lycée Henri Wallon</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/login.css" />
</head>

<body>
    <div class="menu-overlay"></div>
    <header>
        @include('nav')
    </header>

    <main class="auth-container">
        <div class="auth-content">
            <div class="auth-form">
                <h2>Bienvenue parmi nous !</h2>
                <form action="{{ url('/auth/register') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="firstName">Prénom</label>
                        <input type="text" id="firstName" placeholder="Martin" required autocomplete="given-name" name="name" />
                    </div>
                    <div class="form-group">
                        <label for="lastName">Nom</label>
                        <input type="text" id="lastName" placeholder="Matin" required autocomplete="family-name" name="first_name"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="alex@wallon.com" required autocomplete="email" name="email" />
                        @error("email")
                            <p class="login-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="level">Niveau</label>
                        <input type="text" id="level" placeholder="Première" required
                            autocomplete="organization-title" name="class_level"/>
                    </div>
                    <div class="form-group">
                        <label for="classe">Classe</label>
                        <input type="text" id="classe" placeholder="1e G2" required autocomplete="off" name="class_number" "/>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <div class="password-input">
                            <input type="password" id="password" placeholder="Entrez votre mot de passe" required
                                autocomplete="new-password" name="password" />
                            <button type="button" class="toggle-password">
                                <ion-icon name="eye-outline"></ion-icon>
                            </button>
                        </div>
                        @error("password")
                            <p class="login-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="submit" class="submit-btn" value="S'inscrire">
                    <div class="register-error" hidden></div>
                    <div class="register-success" hidden></div>
                </form>
                <p class="auth-switch">
                    Vous avez déjà un compte ? <a href="login">Se connecter ici</a>
                </p>
            </div>

            <div class="auth-image">
                <img src="/login.png" alt="Illustration du lycée" />
            </div>
        </div>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="/js/theme.js"></script>
    <script src="/js/password-toggle.js"></script>

</body>

</html>
