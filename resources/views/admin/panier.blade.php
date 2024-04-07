<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Page Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleAdmin2.css">
  </head>
  <body>
    @include('admin.header')
  <div class="adm">
    <main>
      <section id="products">
        <h2>Produits de panier</h2>
        <table>
          <thead>
            <tr>
              <th>ID Commande</th>
              <th>Article</th>
              <th>NomProduit</th>
              <th>prixProduit</th>
              <th>ID Produit</th>
              <th>ID User</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($panier as $p)
            <tr>
              <td>{{$p->id}}</td>
              <td><img src="{{$p->imageProduit}}" alt="" width=80 height=100></td>
              <td>{{$p->nomProduit}}</td>
              <td>{{$p->prixProduit}}</td>
              <td>{{$p->idProduit}}</td>
              <td>{{$p->idUser}}</td>
              <td>
                {{-- <button><a href="/updatecommande/{{$c->id}}">Modifier</a></button> --}}
                <button style="background-color: #f44336"><a href="/supprimercommande/{{$p->id}}">Supprimer</a></button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
    </main>
    <footer class="foot">
      <p>Copyright © 2023</p>
    </footer>
  </div>
</body>
</html>