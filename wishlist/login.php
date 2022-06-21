<?php
session_start();
require 'lib/conn.php';
$connection = DB::getInstance();
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['senha'];
  $query = $connection->prepare("SELECT * FROM usuario WHERE email=:email");
  $query->bindParam("email", $email, PDO::PARAM_STR);
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
  if (!$result) {
    echo '<p class="alert alert-warning text-center error">Email não cadastrado!</p>';
  } else {
    if (password_verify($password, $result['senha'])) {
      $_SESSION['user_id'] = $result['id'];
      header('Location: nutriform.php');
      echo '<html </html>';
    } else {
      echo '<p class="alert alert-warning text-center error">Senha ou email incorreto!</p>';
    }
  }
}
?>



<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link type="text/css" href="frontend/style.css" rel="stylesheet"/>
  <title>Cardapio RU</title>
</head>

<body class="container-fluid ">


  <form class="container w-25 p-3" method="post" align="center">
    <h1 style="text-align: center;">Login</h1>
    <div class="form-outline mb-4">
      <input type="email" name="email" class="form-control" />
      <label class="form-label" for="form2Example1">Email</label>
    </div>


    <div class="form-outline mb-4">
      <input type="password" name="senha" class="form-control" />
      <label class="form-label" for="form2Example2">Senha</label>
    </div>


    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
      </div>



      <button type="submit" name="login" class="btn btn-success btn-block mb-4">Entrar</button>


      <div class="text-center">
        <p>Não tem uma conta? <a href="register.php">Registrar-se</a></p>
      </div>
  </form>

</body>

</html>