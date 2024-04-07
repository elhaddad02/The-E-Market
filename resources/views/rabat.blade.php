<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ccs link -->
    <link rel="stylesheet" href="style.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title>The E-Market</title>
</head>
<body>
    <div class="container">
    @section('home')
    <div class='myAllRow'>
        <div class="row">
            <div class="menu">
                <i class="fa-solid fa-bars navOpenBtn"></i>
            </div>
            <div class="links">
                <i class="fa-solid fa-xmark navCloseBtn"></i>
                <a href="/"><i class="fa-solid fa-house"></i></i></a>
                <a href="#femme">Femme</a>
                <a href="#homme">Homme</a>
                <a href="#enfant">Enfant</a>
            </div>
        
            <div class="logo">
                <h1>The E-Market</h1>
                <span class="ville">Rabat</span>
            </div>
            <div class="links">
                <button id="boutique">Boutiques</button>
            </div>
            {{-- <div class="search"> --}}
                {{-- <input type="text" id="ourSearch" placeholder="search..."> --}}
                {{-- <input type="text" name="" id="inp" placeholder="search..."> --}}
                {{-- <button id="sbm" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>             --}}

            {{-- </div> --}}
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
                <!-- <li><a href="">Boutique Fes</a></li> -->
            </ul>
        <!-- carte de connexion -->
        {{-- <div class="cards">
            <div class="loginCard">
                <span class="removeCard">
                        <i class="fa-regular fa-x"></i>
                </span>
                <div class="h2">
                    <h2 class="T1">Se connecter</h2>
                    <h2 class="T2">Registre</h2>
                </div>
                
                <form action="">
                    <div class="username">
                        <input type="text" id="username" placeholder="username">
                    </div>
                    <div class="password">
                        <input type="password" id="password" placeholder="password">
                    </div>
                    <div class="sbm">
                        <button class="login">LOGIN</button>
                    </div>
                    <div class="forgotpw">
                        <a href="#">frogot password</a>
                    </div>
                </form>
            </div>    
            <div class="singUpCard">
                <span class="removeCard">
                    <i class="fa-regular fa-x"></i>
                </span>
                <div class="h2">
                    <h2 class="T1">Se connecter</h2>
                    <h2 class="T2">Registre</h2>
                </div>
                <form action="addClient" method='POST'>
                    @csrf
                    <div class="username">
                        <input type="text" name="username" id="" placeholder="Username" value="{{ old('username') }}">
                        @error('username')
                            <p  class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="email">
                        <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <p  class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="password">
                        <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                        @error('password')
                            <p  class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="confirmation password">
                        <input type="password" name="confpass" id="" placeholder="confirmation password" value="{{ old('confpass') }}">
                        @error('confpass')
                            <p  class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="sbm">
                        <!-- <input type="submit" value="Registre" class="singup"> -->
                        <button class="singup">Registre</button>
                    </div>
                </form>
            </div>
        </div> --}}
    </div>
        <div class="cover">
            <img src="images/rabatBack.jpeg" alt="">
        </div>
        
    @show
    @section('content')
        <div class="femme">
            <h1 class="h1">FEMME...</h1>
            <div class="productes" id="femme">
                @foreach($product as $data)
                <?php 
                    $sexe=$data->sexe;
                    $ville=$data->nomVille;
                    $idd=$data->id;
                 ?>
                @if($sexe=="femme" && $ville=="rabat")
                <div class="article">
                    <img id="img1" src="{{$data->image}}" alt="" >
                    <!-- <img id="img2" src="images/femme/F1'.webp" alt=""> -->
                    <p>{{$data->nom}}</p>
                    <span>{{$data->prix}}$ <del>500$</del></span>
                    <br>
                    <div class="btns">
                        <button id="size" type="radio">S</button>
                        <button id="size" type="radio">M</button>
                        <button id="size" type="radio">L</button>
                        <button id="size" type="radio">XL</button>
                    </div>
                    <Button id="btn" name="idd"><a href="/addProduct/{{$idd}}">Ajouter au panier</a></Button>
                </div>
                @endif
                @endforeach
            </div>
        
        </div>
        <div class="homme">
            <h1 class="h1">Homme...</h1>
            <div class="productes" id="homme">
                @foreach($product as $data)
                <?php 
                    $sexe=$data->sexe;
                    $ville=$data->nomVille;
                    $idd=$data->id;
                 ?>
                @if($sexe=="homme" && $ville=="rabat")
                <div class="article">
                    <img id="img1" src="{{$data->image}}" alt="" >
                    <!-- <img id="img2" src="images/femme/F1'.webp" alt=""> -->
                    <p>{{$data->nom}}</p>
                    <span>{{$data->prix}}$ <del>500$</del></span>
                    <br>
                    <div class="btns">
                        <button id="size" type="radio">S</button>
                        <button id="size" type="radio">M</button>
                        <button id="size" type="radio">L</button>
                        <button id="size" type="radio">XL</button>
                    </div>
                    <Button id="btn" name="idd"><a href="/addProduct/{{$idd}}">Ajouter au panier</a></Button>
                </div>
                @endif
                @endforeach
            </div>

        </div>
        <div class="enfant">
            <h1 class="h1">Enfant...</h1>
            <div class="productes" id="enfant">
                @foreach($product as $data)
                <?php 
                    $sexe=$data->sexe;
                    $ville=$data->nomVille;
                    $idd=$data->id;
                 ?>
                @if($sexe=="enfant" && $ville=="rabat")
                <div class="article">
                    <img id="img1" src="{{$data->image}}" alt="" >
                    <p>{{$data->nom}}</p>
                    <span>{{$data->prix}}$ <del>500$</del></span>
                    <br>
                    <div class="btns">
                        <button id="size" type="radio">S</button>
                        <button id="size" type="radio">M</button>
                        <button id="size" type="radio">L</button>
                        <button id="size" type="radio">XL</button>
                    </div>
                    <Button id="btn" name="idd"><a href="/addProduct/{{$idd}}">Ajouter au panier</a></Button>
                </div>
                @endif
                @endforeach
            </div>
    
        </div>
    @show
        <!-- footer -->
    @section('footer')    
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
    @show
    </div>
    

 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
 <script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>
</html>