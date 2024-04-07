<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="FactureStyle.css">
    <title>facture {{$infos[0]->username}}</title>
</head>
<body>
    
    <div class="facture">
        <div class="facture-header">
          <h1>{{ $title }}</h1>
        </div>
        <div class="facture-details">
          <p>Numéro de facture: {{$infos[0]->numeroCommande}}</p>
          <p>Date de commande: {{$infos[0]->dateCommande}}</p>
          <p>Client: {{$infos[0]->nomClient}} {{$infos[0]->prenomClient}}</p>
          <p>Adresse de Client: {{$infos[0]->adresseClient}}</p>
          <p>Téléphone Client: 0{{$infos[0]->telephoneClient}} </p>
          <h4>cher client</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore odio impedit? Esse ab totam molestias facere fuga cupiditate aut harum,
             facilis quam fugiat saepe voluptatum a dolore qui dicta?
          </p>
        </div>
        <table class="facture-items">
          <thead>
            <tr>
              <th>Produit</th>
              <th>Prix unitaire</th>
              <th>Quantité</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach($infos as $info)
            <tr>
              <td>{{$info->nomProduit}}</td>
              <td>{{$info->prixProduit}}</td>
              <td>{{$info->quantiteProduit}}</td>
              <td>{{$info->totalProduit}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="facture-total">
          <p>Total: {{$info->totalCommande}} DH</p>
        </div>
        <p class="sg">Cachet et signature du responsable </p>
      </div>
</body>
</html>