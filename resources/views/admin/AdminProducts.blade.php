<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Page Admin</title>
    <link rel="stylesheet" href="styleAdmin2.css">
    {{-- <link rel="stylesheet" href="style.css"> --}}

  </head>
  <body>


  @include('admin.header')


  <div class="adm">
    <main>
      <section id="products">
        <h2>Produits disponibles</h2>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Article</th>
              <th>Nom</th>
              <th>Description</th>
              <th>Prix</th>
              <th>Sexe</th>
              <th>Ville</th>
              <th>Stock</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($produits as $p)
            <tr>
              <td>{{$p->id}}</td>
              <td><img src="{{$p->image}}" alt="" width=80 height=100></td>
              <td>{{$p->nom}}</td>
              <td>{{$p->description}}</td>
              <td>{{$p->prix}}DH</td>
              <td>{{$p->sexe}}</td>
              @if($p->villes)
              <td>
                @foreach(explode(', ', $p->villes) as $ville)
                  <li>{{ $ville }}</li>
                @endforeach
              </td>
              @endif
              <td>{{$p->stock}}</td>
              <td>
                <button><a href="/edit/{{$p->id}}">Modifier</a></button>
                <button><a href="/delete/{{$p->id}}">Supprimer</a></button>
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
    <script src="script.js"></script>
  </body>
</html>