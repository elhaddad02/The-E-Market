<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    {{-- bootstrap --}}
    {{-- <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css"> --}}

    <!-- Link Swiper's CSS -->

    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title>The E-Market</title>
</head>
<body>
{{-- @extends('layout') 
@section('links','')
@section('search','') --}}
<div class="container">
    <div class='myAllRow'>
        <div class="row">
            <div class="menu">
                <i class="fa-solid fa-bars navOpenBtn"></i>
            </div>
            <div class="links">
                @section('links')
                <i class="uil uil-times navCloseBtn"></i>
                <a href="/"><i class="fa-solid fa-house"></i></i></a>
                {{-- <a href="#femme">Femme</a>
                <a href="#homme">Homme</a>
                <a href="#enfant">Enfant</a> --}}
                @show
            </div>
            <div class="logo">
                <h1>The E-Market</h1>
                {{-- <span class="ville">casablanca</span> --}}
            </div>
            <div class="links">
                <button id="boutique">Boutiques</button>
            </div>
            @section("search")
            <div class="search">
                {{-- <input type="text" id="ourSearch" placeholder="search..."> --}}
                {{-- <input type="text" name="" id="inp" placeholder="search...">
                <button id="sbm" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>             --}}
            </div>
            @show
            <div class="iconPanier">
                @guest
                    <button class="lg"><a href="/login"><i class="fa-solid fa-user"></i></a></button> 
                @endguest   
                @auth 
                <div class="dropdown">
                    <button class="dropdown-btn">{{$user->username }} </button>
                    <div class="dropdown-content">
                      <a href="/logout">Déconnecter</a>
                    </div>
                </div>
                @endauth                 
                    <button ><a href="/panier"><i class="fa-solid fa-cart-shopping"></i></a></button>
                    <div class="dropdown2">
                        <button class="dropdown-btn">
                            <i class="fa-solid fa-globe"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="/locale/en">Anglais</a>
                          <a href="/locale/fr">Français</a>
                          <a href="/locale/ar">Arabe</a>
                        </div>
                    </div>

            </div>
        </div>
        <!-- les boutiques -->
        <ul class="boutiques">
            <li><a href="/casablanca">Boutique Casablanca</a> </li>
            <li><a href="/rabat">Boutique Rabat</a></li>
            <li><a href="/tanger">Boutique Tanger</a></li>
        </ul>
    </div>

        {{-- @section('cover') --}}
        <div class="cover">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
            centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide><img src="images/coverA.webp" alt=""></swiper-slide>
                <swiper-slide><img src="images/cover4.jpg" alt=""></swiper-slide>
                <swiper-slide><img src="images/backg7.jpg" alt=""></swiper-slide>
                <swiper-slide><img src="images/cover8.jpg" alt=""></swiper-slide>
                <swiper-slide><img src="images/cover9.jpg" alt=""></swiper-slide>
            </swiper-container>
        </div>
        
        {{-- @endsection  --}}
        {{-- @section('content') --}}
        <div class="contenu">
            <h1>DES PIÈCES FORTES.</h1>
            <h2>DES IMPRIMÉS SUBLIMES.</h2> 
            <div class="welcomeCards">
                <div class=card>
                    <img src="images/cards/femme.webp" alt="">
                    <h2>WOMEN</h2>
                </div>
                <div class=card>
                    <img src="images/cards/man.jpg" alt="">
                    <h2>MEN</h2>
                </div>
                <div class=card>
                    <img src="images/cards/enfants.jpg" alt="">
                    <h2>KIDS</h2>
                </div>
                <div class=card>
                    <img src="images/cards/bebe.jpg" alt="">
                    <h2>BABIES</h2>
                </div>
            </div>
        </div>
        {{-- @endsection --}}
        {{-- footer --}}
        <footer>
            <h1>Contact...</h1>
            <div class="footer">
                <div class="sMedia">
                    <h2>TROUVEZ NOUS SUR</h2>
                    <ul>
                        <li><i class="fa-brands fa-facebook-f"></i></li>
                        <li><i class="fa-brands fa-instagram"></i></li>
                        <li><i class="fa-brands fa-twitter"></i></li>
                        <li><i class="fa-brands fa-pinterest-p"></i></li>
                        <li><i class="fa-brands fa-snapchat"></i></li>
                        <li><i class="fa-brands fa-tiktok"></i></li>
                    </ul>
                </div>
                <div class="carteBanquaire">
                    <h2>NOUS ACCEPTONS</h2>
                    <ul>
                        <li><i class="fa-brands fa-cc-paypal"></i></li>
                        <li><i class="fa-brands fa-cc-visa"></i></li>
                        <li><i class="fa-brands fa-cc-amex"></i></li>
                        <li><i class="fa-brands fa-cc-mastercard"></i></span>
                    </ul>
                </div>
                <div class="aide">
                    <h2>CENTRE & D'AIDE</h2>
                    <ul>
                        <li>Livraison</li>
                        <li>Retour</li>
                        <li>Commande</li>
                        <li>Statut De Commande</li>
                        <li>Guide Des Tailles</li>
                        <li>Responsabilité Sociale</li>
                    </ul>
                </div>
                <div class="info">
                    <h2>Information D'entreprise</h2>
                    <ul>
                        <li>E-Market</li>
                        <li>À propos de nous</li>
                        <li>Ressources humaines</li>
                    </ul>
                </div>
            </div>
            <div class="lastfooter">
                &copy; 2023 <strong>E-Market</strong> All Right Reserved
            </div>
        </footer>
    
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>
</html>