<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylePanier.css">
    <title>panier</title>
</head>
<body>


    <section id="row">
        @include('Row')
    </section>
{{-- <h2>voici votre commande</h2> --}}
<div class="panierPage">
    <div class="cart-card">
        <div class="cart-title">Résumé De Votre Commande</div>
        <div class="cart-total">Total : MAD {{$totalpanier[0]->TotalGeneralProduits}}</div>
        <a href="/commandevalider" class="cart-button">Passer à la caisse</a>
    </div>
    <div class="table100">

        <table>
        <thead>
        <tr class="table100-head">
            <th class="column1">Article(s)</th>
            <th class="column2">Order ID</th>
            <th class="column3">Name</th>
            <th class="column4">Price</th>
            <th class="column5">Quantity</th>
            <th class="column6">Total</th>
            <th class="column7">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td><img src="{{$product->imageProduit}}" alt="image du produit" width=120 height=150></td>
                <td id="orderId">{{$product->idProduit}}</td>
                <td>{{$product->nomProduit}}</td>
                <td id="price">{{$product->prixProduit}}</td>
                <td id='quantite'>{{$product->quantiteProduit}}</td>
                <td id='totalProduit'>{{$product->totalProduit}}</td>
                <td>
                    <button class='btn'><a href="/supprimer/{{$product->id}}">Supprimer</a></button>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>


<script src="script.js"></script>
<script src="scriptPanier.js"></script>

</body>
</html>