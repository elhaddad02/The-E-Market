<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylecommandeAdmin.css">
    <title>Document</title>
</head>
<body>
    
    @include('admin.header')
    <table class="MyContainer">
        <thead>
            <tr>
                <th><h1>Clients</h1></th>
                <th><h1>Adresse</h1></th>
                <th><h1>Téléphone</h1></th>
                <th><h1>Factures</h1></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commandesV as $commande)
            <tr>
                <td>{{$commande->nomClient}} {{$commande->prenomClient}}</td>
                <td>{{$commande->adresseClient}}</td>
                <td>{{$commande->telephoneClient}}</td>
                <td><a class="btn" href="generate-pdf/{{$commande->idUser}}">Télécharger</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <footer class="foot">
        <p>Copyright © 2023</p>
    </footer>
</body>
</html>