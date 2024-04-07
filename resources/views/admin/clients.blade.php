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
    <main>
      <section id="products">   
        <h2>Clients</h2>
        <table>
          <thead>
            <tr>
              <th>Matricule</th>
              <th>User Name</th>
              <th>email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clients as $c)
            <tr>
              <td>{{$c->id}}</td>
              <td>{{$c->username}}</td>
              <td>{{$c->email}}</td>
              <td>
                {{-- <button>Modifier</button> --}}
                <button><a href="/deleteclient/{{$c->id}}">Supprimer</a></button>
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