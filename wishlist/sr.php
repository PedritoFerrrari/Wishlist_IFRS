<?php

include("frontend/navbar.html");

session_start();
if (!isset($_SESSION['user_id'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Login necessário");';
  echo 'window.location.href = "login.php";';
  echo '</script>';
  exit;
}

if (isset($_POST['logout'])) {
  session_destroy();
  header('Location: login.php');
}


?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Sites Recomendados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="180x180" href="frontend/img/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="frontend/img/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="frontend/img/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="frontend/img/favicon_io/site.webmanifest">
  
  <link type="text/css" href="frontend/css/style.css" rel="stylesheet" />
</head>

<body>


  <br>


  <div class="jumbotron">
    <div class="container text-center text-bottom">
      <h1>Sites Recomendados</h1>
      <p>Lista com as lojas portadas em nosso site!</p>
    </div>
  </div>


  <div class="container-fluid d-flex justify-content-evenly mb-50 mt-5">
    <div class="row">
      <div class="card" style="width: 18rem;">
        <img src="frontend/img/logo-aliexpress.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Aliexpress</h5>
          <a href="https://pt.aliexpress.com/?gatewayAdapt=glo2bra" class="btn btn-new mt-1 text-light justify-content-center">Mais Detalhes</a>
        </div>
      </div>
    </div>
</html>