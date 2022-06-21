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
<html lang="pt">

<head>
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="apple-touch-icon" sizes="180x180" href="frontend/img/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="frontend/img/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="frontend/img/favicon_io/favicon-16x16.png">
<link rel="manifest" href="frontend/img/favicon_io/site.webmanifest">
<link type="text/css" href="frontend/css/style.css" rel="stylesheet" >


</head>

<body>
  <br>

  <div class="jumbotron bg-sucess">
    <div class="container text-center ">
      <h1>Wishlist</h1>
      <p>
      <h5>Acesse o seu perfil!</h5>
      </p>
    </div>
  </div>

  <!--Mostrar dados perfil-->

  <div class="container ">
    <div class="row">
      <div class="panel">
        <img src="frontend/img/1946429.png" alt="" width="100" weight="70">
        </a>
        <?php
        include('lib/conn.php');

        $id = $_SESSION['user_id'];
        $connection = DB::getInstance();
        $nomeuser = $connection->prepare("SELECT nome FROM login where id=:id");
        $nomeuser->BindParam(':id', $id);
        $nomeuser->execute();
        $resultado = $nomeuser->fetch(PDO::FETCH_ASSOC);

        echo "<h2>{$resultado['nome']}</h2>";

        $id = $_SESSION['user_id'];
        $connection = DB::getInstance();
        $emailuser = $connection->prepare("SELECT email FROM login where id=:id");
        $emailuser->BindParam(':id', $id);
        $emailuser->execute();
        $resultado = $emailuser->fetch(PDO::FETCH_ASSOC);

        echo "<p>{$resultado['email']}</p>";

        ?>

      </div>
    </div>
  </div>

  <br>
  <br>
  
  <!-- mostrar produtos -->

<div class="container-fluid d-flex justify-content-evenly mb-50 mt-5">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="frontend/img/prod.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Produto bla bla bla</h5>
                    <a href="#" class="btn btn-new mt-1 text-light">Mais detalhes</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="frontend/img/prod.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Produto bla bla bla</h5>
                    <a href="#" class="btn btn-new mt-1 text-light">Mais detalhes</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="frontend/img/prod.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Produto bla bla bla</h5>
                    <a href="#" class="btn btn-new mt-1 text-light">Mais detalhes</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>