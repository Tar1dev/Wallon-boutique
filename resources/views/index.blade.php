<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lycée Henri Wallon</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/index.css" />
</head>

<body>
  <div class="menu-overlay"></div>
  <header>
      @include('nav')
  </header>

  <h1 class="login-success" hidden>Login Successful</h1>


  <div class="slider">
    <div class="slider-container">
      <img src="/slide1.png" alt="Image du lycée 1" class="slide active" />
      <img src="/slide2.png" alt="Image du lycée 2" class="slide" />
      <img src="/slide3.png" alt="Image du lycée 3" class="slide" />
    </div>
    <div class="slider-nav">
      <button class="slider-dot active" data-index="0"></button>
      <button class="slider-dot" data-index="1"></button>
      <button class="slider-dot" data-index="2"></button>
    </div>
  </div>

  <div class="welcome-section">
    <h1>Boutique en ligne du lycée Henri Wallon</h1>
    <p>Retrouvez tous nos goodies !</p>
  </div>

  <div class="best-sellers">
    <h2>Nos best sellers</h2>
    <div class="products">

      <div class="product">
        <img src="/product2.png" alt="T-shirt blanc" />
        <div class="product-info">
          <h3>T-shirt blanc</h3>
          <p>15.99€</p>
        </div>
      </div>

      <div class="product">
        <img src="/product1.png" alt="Mug du lycée" />
        <div class="product-info">
          <h3>Mug du lycée</h3>
          <p>9.99€</p>
        </div>
      </div>

      <div class="product">
        <img src="/product3.png" alt="Sweatshirt noir" />
        <div class="product-info">
          <h3>Sweatshirt noir</h3>
          <p>29.99€</p>
        </div>
      </div>

    </div>
  </div>

  <footer>
    <div class="footer-content">
      <div class="contact">
        <h3>Contact :</h3>
        <ul>
          <li>
            <ion-icon name="mail-outline"></ion-icon>
            <a href="mailto:maildulycee@gmail.com">maildulycee@gmail.com</a>
          </li>
          <li>
            <ion-icon name="logo-instagram"></ion-icon>
            <a href="https://instagram.com/insta">@insta</a>
          </li>
          <li>
            <ion-icon name="game-controller-outline"></ion-icon>
            <a href="#">nsicorp-lien</a>
          </li>
          <li>
            <ion-icon name="call-outline"></ion-icon>
            <span>03 *****</span>
          </li>
        </ul>
      </div>
      <img src="/logo-wallon.png" alt="Logo Henri Wallon" class="footer-logo" />
    </div>
  </footer>

  <script src="/src/main.js"></script>
  <script src="/src/pages/scripts/index.js"></script>
  <script src="/src/pages/scripts/theme.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>