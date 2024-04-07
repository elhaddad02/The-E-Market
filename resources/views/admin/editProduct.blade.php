<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Page Admin</title>
    <link rel="stylesheet" href="../styleAdmin2.css">
    <link rel="stylesheet" href="../style.css">
    

  </head>
  <body>
@include('admin.header')
<div class="adm">
    <div class="content">
        <h1>Modifier Produit</h1>
        <form action="/update" method="POST">
            @method('put')
            @csrf
            <div class="inp">
                <label for="id">ID</label>
                <br>
                <input type="number" name="id" id="id" value="{{$prd[0]->id}}">
            </div>
            
            <div class="inp">
                <label for="description">Description</label>
                <br>
                <input type="text" name="description" id="description" value="{{$prd[0]->description}}" >
                
            </div>
            <div class="inp">
                <label for="nom">Nom de Produit</label>
                <br>
                <input type="text" name="nom" id="nom" value="{{$prd[0]->nom}}">
            </div>
            
            <div class="inp">
                <label for="prix">Prix de Produit</label>
                <br>
                <input type="number" name="prix" id="prix" value="{{$prd[0]->prix}}">
            </div>
            
            <div class="inp">
                <label for="sexe">Pour</label>
                <br>
                <select name="sexe" id="sexe" value="{{$prd[0]->sexe}}">
                    <option value="femme">Femme</option>
                    <option value="homme">Homme</option>

                </select>
            </div>
            
            <div class="inp">
                <label for="stock">Stock</label>
                <br>
                <input type="number" name="stock" id="stock" value="">
            </div>
            <br>
            <div class="inp">
                <input id="bttn" type="submit" value="UPDATE">
            </div>
        </form>
        <footer class="foot">
            <p>Copyright © 2023</p>
        </footer>
    </div>
</div>
</body>
</html>
