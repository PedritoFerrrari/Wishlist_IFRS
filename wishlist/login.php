<?php
session_start();
require 'lib/conn.php';
$connection = DB::getInstance();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['senha'];
    $query = $connection->prepare("SELECT * FROM login WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<p class="alert alert-warning text-center error">Email não cadastrado!</p>';
    } else {
        if (password_verify($password, $result['senha'])) {
            $_SESSION['user_id'] = $result['id'];
            header('Location: mainpage.php');
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
    <link type="text/css" href="frontend/css/style.css" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="frontend/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="frontend/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="frontend/img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="frontend/img/favicon_io/site.webmanifest">

    <title>Login Wishlist</title>
</head>

<body>

    <div class="container-fluid position-absolute top-50 start-50 translate-middle ">
        <form class="container w-25 p-3 text-center " method="post">
            <h1 class="mt-4" style="text-align: center;">Login </h1>
            <div class="form-outline mb-4 mt-4">
                <input type="email" name="email" class="form-control" placeholder="smth@theemail.com" />
                <label class="form-label mt-2" for="form2Example1">Email</label>
            </div>


            <div class="form-outline">
                <input type="password" name="senha" class="form-control" placeholder="*********" />
                <label class="form-label" for="form2Example2">Senha</label>
            </div>


            <div class="d-grid ">
                <div class="col d-flex justify-content-center">
                </div>

                <button type="submit" name="login" class="btn btn-new text-light btn-block mb-4 mt-4">Entrar</button>

                <div class="text-center">
                    <p>Não tem uma conta? <a href="register.php">Registrar-se</a></p>
                </div>
            </div>
        </form>
    </div>

</body>

</html>