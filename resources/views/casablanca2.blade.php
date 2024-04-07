@extends('layout')
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
                @if($sexe=="femme" && $ville=="casablanca")
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
                    <Button id="btn"><a href="/addProduct/{{$idd}}">Ajouter au panier</a></Button>
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
                @if($sexe=="homme" && $ville=="casablanca")
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
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div> -->
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
                @if($sexe=="enfant" && $ville=="casablanca")
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
    @endsection
    
     <script src="script.js"></script>
