<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="commandeStyle.css">
    <title>commande</title>
</head>
<body>
    <section class="formulaire">
        <div class="container">
          <div class="contact_box">
            <h3>Informations</h3>
            <div class="content_box">
              <ul>
                <li> <i class="fab fa-linkedin"></i>
                  <p>Linkedin</p>
                </li>
                <li><i class="fas fa-phone-square"></i>
                  <p>06 07 05 08 06</p>
                </li>
                <li><i class="fas fa-envelope-square"></i>
                  <p>the_emarket@gmail.com</p>
                </li>
                <li><i class="fas fa-map-marker-alt"></i>
                  <p>21 rue el oulfa <br> casablanca, 03151</p>
                </li>
              </ul>
            </div>
          </div>
          <form id="form" action="/insertCommande" method="post">
            @csrf
            <h3>Valider Commande</h3>
            <div class="form_container">
              <div class="input_container">
                <div class="input_bloc">
                  <div class="input_box">
                    <input type="text" placeholder="Nom" name="nom" required>
                  </div>
                  <div class="input_box">
                    <input type="text" placeholder="Prénom" name="prenom" required>
                  </div>
                </div>
                <div class="input_bloc">
                  <div class="input_box">
                    <input type="text" placeholder="Pays" name="pays">
                  </div>
                  <div class="input_box">
                    <input type="text" placeholder="Ville" name="ville">
                  </div>
                </div>
                <div class="input_bloc">
                  <div class="input_box">
                    <input type="email" placeholder="Email" name="email" required>
                  </div>
                  <div class="input_box">
                    <input type="text" placeholder="Téléphone" name="telephone">
                  </div>
                </div>
                <div class="input_bloc">
                    <div class="input_box">
                      <input type="text" placeholder="Adresse" name="adresse" required>
                    </div>
                    <div class="input_box">
                      <input type="number" placeholder="Code Postale" name="codepostale">
                    </div>
                  </div>
              
                <div class="text_area">
                  <input placeholder="Numéro De Carte " name="numerocarte" required>
                </div>
                <div class="input_bloc">
                  <div class="input_box">
                    <input type="number" placeholder="code" name="code" required>
                  </div>
                  <div class="input_box">
                    <input type="text" placeholder="votre identité" name="cin">
                  </div>
                </div>
              </div>
              <div class="button">
                <input type="submit" value="Valider">
              </div>
            </div>
          </form>
        </div>
      </section>
</body>
</html>