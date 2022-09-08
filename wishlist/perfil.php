<?php

include("frontend/navbar.html");
include("lib/conn.php");

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

if (isset($_POST['delete_product'])) {
  $id_product = $_POST['delete_product'];
  $connection = DB::getInstance();
  $stmt = $connection->prepare("DELETE FROM produtos where id=:id");
  $stmt->execute([':id' => $id_product]);
  if ($stmt) {
    echo '<p class="alert alert-success text-center success top-0">Excluido com Sucesso!</p>';
  } else {
    echo '<p class="alert alert-warning text-center error">Algo deu errado!</p>';
  }
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
  <link type="text/css" href="frontend/css/style.css" rel="stylesheet">


</head>

<body>
  <br>

  <!-- <?php

        $html = file_get_contents('https://pt.aliexpress.com/item/1005001905877681.html?');

        // libxml_use_internal_errors(true);

        $js = preg_match('/\"pageModule(.+)\}/i', $html, $saida);
        $saida = '{' . $saida[0];

        #echo $saida;

        $obj = json_decode($saida);
        //print_r($obj);

        $descricaoprod = $obj->pageModule->title;
        $precoprod = $obj->priceModule->formatedPrice;
        $imgprod =  $obj->pageModule->imagePath;
        $descontoprod = $obj->priceModule->formatedActivityPrice;

        ?> -->

  <div class="jumbotron bg-sucess">
    <div class="container text-center">
      <h1>Wishlist</h1>
      <p>
      <h5>Acesse o seu perfil!</h5>
      </p>
    </div>

    <div class="container ">
      <div class="row">
        <div class="container">
          <img src="frontend/img/1946429.png" alt="" width="100" weight="70">
          </a>

        </div>
      </div>
    </div>
  </div>
  <br>  
  <!--Mostrar dados perfil-->
  <div class="container">
    <?php

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

  <!-- mostrar produtos -->
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5">
      <?php
      $connection = DB::getInstance();
      $u = $_SESSION['user_id'];
      $dados = $connection->query("SELECT * from produtos where id_user='$u'");
      $dados->setFetchMode(PDO::FETCH_ASSOC);
      foreach ($dados as $d) {
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?php echo $d['imageprod']; ?>" width="350" height="272" class="card-img-top">
            <div class="card-body bg-transparent mb-2">
              <h5 class="card-text text-center text-dark"><?php echo $d['nomeprod']; ?> </h5>
              <h5 class="card-text text-center"><?php echo $d['descriprod']; ?></h5>
            </div>
            <div class="card-footer bg-transparent">
              <h5 class="card-text text-center border-0">Valor: R$<?php echo $d['valorprod']; ?></h5>
              <h5 class="card-text text-center border-0">Valor com Desconto: R$<?php echo $d['descontoprod']; ?></h5>
              <a class="btn btn-primary p-2 d-flex justify-content-center" id="botao" href="<?php echo $d['linkprod']; ?>">Mais detalhes</a>
              <form method='POST' action='perfil.php'>
                <button class="btn btn-danger ms-5 mt-1 " type="submit" value='<?php echo $d['id']; ?>' name="delete_product">Deletar Produto</button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <br>

</body>

</html>