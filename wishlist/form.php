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


// //include_once("lib/produto.php");

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// $produtoAlteracao = null;
// $msg = "";

// if ($_POST) {

// if (!empty($_POST["nomep"])) {

// $produto = new produto();
// $produto->setId($_POST["id"]);
// $produto->setNomep($_POST["nomep"]);
// $produto->setLinkp($_POST["linkp"]);


// if (empty($_POST["id"])) {
// $msg = $produto->salvar();
// } else {
// $msg = $produto->atualizar();
// }
// } else {
// $msg = "<div class='aviso'>Por obséquio, verifique os campos obrigatórios</div>";
// }
// } elseif ($_GET) {
// if ($_GET["op"] == "exc") {

// $produto = new produto();


// $produto->setId($_GET["id"]);

// $msg = $produto->excluir();
// } elseif ($_GET["op"] == "alt") {



// $produto = new produto();

// $produto->setId($_GET["id"]);


// $produtosAlteracao = array();

// $produtosAlteracao = $produto->listar($msg);

// if (is_array($produtosAlteracao)) {
// $produtoAlteracao = $produtosAlteracao[0];
// }
// }
//}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Produtos</title>
  <script src="js/js.js" type="text/javascript"> </script>
  <link type="text/css" href="frontend/css/style.css" rel="stylesheet" />

  <link rel="apple-touch-icon" sizes="180x180" href="frontend/img/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="frontend/img/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="frontend/img/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="frontend/img/favicon_io/site.webmanifest">


</head>

<body>

  <div class="jumbotron">
    <div class="container text-center mt-5 " id="saas">
      <h1>Sua Wishlist</h1>
      <h4>
        <p>Adicione um nome e um link ao seu produto e pronto, um novo item será acionado a sua lista!</p>
      </h4>

      <div class="container container-fluid position-absolute top-50 start-50 translate-middle ">
        <form class="container w-25 p-3 text-center " method="post">
          <h1 class="mt-4" style="text-align: center;">Insira os Dados Abaixo: </h1>
          <div class="form-outline mb-4 mt-4">
            <input type="text" name="nomeprod" class="form-control" placeholder="Fones de ouvido" />
            <label class="form-label mt-2" for="form2Example1">Nome</label>
          </div>

          <div class="form-outline">
            <input type="text" name="linkprod" class="form-control" />
            <label class="form-label" for="form2Example2">Link do Produto</label>
          </div>
          <div class="d-grid ">
            <div class="col d-flex justify-content-center">
            </div>
            <button type="submit" name="cadastroprod" class="btn btn-new text-light btn-block mb-4 mt-4">Adicionar</button>
          </div>
      </div>

      <footer>
        <div class="text-center p-3 fixed-bottom bg-dark text-light">
          <p>Created by Pedro Cristal</p>
        </div>
      </footer>
    </div>

</body>

</html>