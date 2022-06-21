<?php
//include_once("lib/produto.php");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$produtoAlteracao = null;
$msg = "";

if ($_POST) {

    if (!empty($_POST["nomep"])) {

        $produto = new produto();
        $produto->setId($_POST["id"]);
        $produto->setNomep($_POST["nomep"]);
        $produto->setLinkp($_POST["linkp"]);


        if (empty($_POST["id"])) {
            $msg = $produto->salvar();
        } else {
            $msg = $produto->atualizar();
        }
    } else {
        $msg =  "<div class='aviso'>Por obséquio, verifique os campos obrigatórios</div>";
    }
} elseif ($_GET) {
    if ($_GET["op"] == "exc") {

        $produto = new produto();


        $produto->setId($_GET["id"]);

        $msg = $produto->excluir();
    } elseif ($_GET["op"] == "alt") {



        $produto = new produto();

        $produto->setId($_GET["id"]);


        $produtosAlteracao = array();

        $produtosAlteracao = $produto->listar($msg);

        if (is_array($produtosAlteracao)) {
            $produtoAlteracao = $produtosAlteracao[0];
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Adicione Um Produto:</title>
    <script src="js/js.js" type="text/javascript"> </script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <li>
                        <a class="navbar-brand ms-auto"><img src="img/wishlist.png" width="100" weight="100" alt=""> </a>
                    </li>
                    <a class="nav-link active" aria-current="page" href="mainpage.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="form.php">Sua Wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="sr.php">Sites Portados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="perfil.php">Perfil</a>
                    </li>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container text-center " id="saas">
            <h1>Sua Wishlist</h1>
            <p>Adicione um nome e um link ao seu produto e pronto, um novo item será acionado a ausa lista!</p>

        </div>
    </div>

    <div class=" container text-center" id="cadastro" name="cadastro">
        <?php

        if ($msg !== "") {
            echo "<div id='msg' name='msg' >" . $msg . "</div>";
            $msg = "";
        }
        ?>
        <form name="formulario" action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
            <input type="hidden" name="id" id="id" value="<?= isset($produtoAlteracao) ? $produtoAlteracao->getId() : ""; ?>" />
            <fieldset>
                <div class="campo">
                    <h2>Insira os dados abaixo:</h2>
                    <br>
                    <label for="nome">Nome:</label><br>
                    <input type="text" size="50" name="nome" id="nome" placeholder="Dê um nome ao produto:" value="<?= isset($produtoAlteracao) ? $produtoAlteracao->getNomep() : ""; ?>" />
                </div>
                <br>
                <div class="campo">
                    <br><label for="produto">Link do produto:</label><br>
                    <input type="text" name="link" id="link" placeholder="Informe o link do Produto:" value="<?= isset($produtoAlteracao) ? $produtoAlteracao->getLinkp() : ""; ?>" />
                </div>
                <br>
                <div>
                    <button class="btn btn-dark" type="submit" name="cadastrar" id="cadastrar" onclick="return validar()">Inserir/Atualizar</button>
                </div>
        </form>
    </div>

    <footer>
        <div class="text-center p-3 fixed-bottom bg-dark text-light">
           <p>Created by Pedro do narga</p>
        </div>
    </footer>

</body>

</html>