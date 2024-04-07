<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./styleAdmin.css">
    <link rel="stylesheet" href="./styleLogin.css">
    
    <title>Admin Dashboard </title> 
</head>
<body>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>Page Admin</h1>
      <div class="forms">
        <div class="form login">
          <span class="title">Login</span>

          <form action="/dashboardadmin" method="post">
            @csrf
            <div class="input-field">
                <input type="text" placeholder="Enter your email" required name="username">
                <i class="uil uil-envelope icon"></i>
            </div>
            <div class="input-field">
                <input type="password" class="password" placeholder="Enter your password" required name="password">
                <i class="uil uil-lock icon"></i>
                <i class="uil uil-eye-slash showHidePw"></i>
            </div>
        
            <div class="checkbox-text">
                <div class="checkbox-content">
                    <input type="checkbox" id="logCheck">
                    <label for="logCheck" class="text">Remember me</label>
                </div>
                          
                <a href="#" class="text">Forgot password?</a>
            </div>
        
            <div class="input-field button">
                <input type="submit" value="Login">
            </div>
        </form>
        

        </div>
      </div>
    </div>
<script src="main.js"></script> 

</body>
</html>