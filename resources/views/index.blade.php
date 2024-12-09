@extends('layouts.base')

@section('content')

    <div class="menu-overlay"></div>
    <header>
        @include('layouts.nav')
    </header>

    <h1 class="login-success" hidden>Login Successful</h1>


    <div class="slider">
        <div class="slider-container">
            <img src="/slide1.png" alt="Image du lycée 1" class="slide active"/>
            <img src="/slide2.png" alt="Image du lycée 2" class="slide"/>
            <img src="/slide3.png" alt="Image du lycée 3" class="slide"/>
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
                <img src="/product2.png" alt="T-shirt blanc"/>
                <div class="product-info">
                    <h3>T-shirt blanc</h3>
                    <p>15.99€</p>
                </div>
            </div>

            <div class="product">
                <img src="/product1.png" alt="Mug du lycée"/>
                <div class="product-info">
                    <h3>Mug du lycée</h3>
                    <p>9.99€</p>
                </div>
            </div>

            <div class="product">
                <img src="/product3.png" alt="Sweatshirt noir"/>
                <div class="product-info">
                    <h3>Sweatshirt noir</h3>
                    <p>29.99€</p>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.footer')
@endsection
