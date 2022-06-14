<?php

include ("frontend/navbar.html");

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
  <title>HomePage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="frontend/css/style.css" rel="stylesheet" type="text/css">
 
  <link rel="apple-touch-icon" sizes="180x180" href="frontend/img/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="frontend/img/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="frontend/img/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="frontend/img/favicon_io/site.webmanifest">

</head>

<body>

  <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start mt-5">
    <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">
      <h1>Wishlist</h1>
      <h1>Crie e Organize uma lista de desejos com seus produtos favoritos!</h1>
    </div>
  </div>


  <div id="texto" class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start mt-5">
    <h5>Aqui você será capaz de criar uma lista de desejo com seus produtos favoritos.</h5>
    <h5>Basta somente adicionar um nome e o link do produto, e pronto, um novo item foi adicionado a sua lista.</h5>
    <h5>Muito simples, certo?!</h5>



  </div>
  <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start mt-5">
    <button class="btn btn-new text-light " onclick="window.location.href='form.php'">Começar</button>
  </div>

  <footer>
    <div class="text-center p-3 fixed-bottom bg-dark text-light">
      Created by Pedro Cristal
    </div>
  </footer>
</body>

</html>