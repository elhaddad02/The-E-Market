<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Page Admin</title>
    <link rel="stylesheet" href="styleAdmin2.css">
  </head>
  <body>
 
  
    @include('admin.header')
  <div class="adm">
    <div class="alert-simple">
      <div class="alert-success">
        <strong>{{$admin->username }}</strong> Vous êtes connecté avec succès.
      </div>
    </div>   


    <main>
      <section id="dashboard">
        <h2>Tableau de bord</h2>
        <div class="rows">
          <div class="col">
            <h3>Commandes en attente</h3>
            <p>10</p>
          </div>
          <div class="col">
            <h3>Produits en stock</h3>
            <p>{{$stock[0]->allStock}}</p>
          </div>
          <div class="col">
            <h3>Clients enregistrés</h3>
            <p>{{$nbrClients[0]->AllUsers}}</p>
          </div>
        </div>
      </section>   
    </main>
    <div class="content">
      <h1>Ajouter Produit</h1>
      <form action="/ajouterProduit" method="POST">
          @csrf
          <div class="inp">
              <label for="id">ID</label>
              <br>
              <input type="number" name="id" id="id" placeholder="incrémentation automatique de l'identifiant">
          </div>
          
          <div class="inp">
              <label for="description">Description</label>
              <br>
              <input type="text" name="description" id="description" >
              
          </div>
          <div class="inp">
              <label for="nom">Nom de Produit</label>
              <br>
              <input type="text" name="nom" id="nom" >
          </div>
          
          <div class="inp">
              <label for="prix">Prix de Produit</label>
              <br>
              <input type="number" name="prix" id="prix">
          </div>
          <div class="inp">
            <label for="image">Image de Produit</label>
            <br>
            <input type="taxt" name="image" id="image">
        </div>
          
          <div class="inp">
              <label for="sexe">Pour</label>
              <br>
              <select name="sexe" id="sexe">
                  <option value="femme">Femme</option>
                  <option value="homme">Homme</option>
              </select>
          </div>
          
          <div class="inp">
              <label for="stock">Stock</label>
              <br>
              <input type="number" name="stock" id="stock" >
          </div>
          <div class="check">
            <br>
            <p>Boutique de :</p>
            <label for="casablanca">Casablanca</label>
            <input type="checkbox" name="casablanca" id="casablanca" value="1">
            <label for="rabat">Rabat</label>
            <input type="checkbox" name="rabat" id="rabat" value="2">
            <label for="tanger">Tanger</label>
            <input type="checkbox" name="tanger" id="tanger" value="3">
          </div>
          <br>
          <div class="inp">
            <input id="bttn" type="submit" value="AJOUTER">
          </div>
      </form>
  </div>
    <footer class="foot">
      <p>Copyright © 2023</p>
    </footer>
</div>
    <script src="script.js"></script>
  </body>
</html>