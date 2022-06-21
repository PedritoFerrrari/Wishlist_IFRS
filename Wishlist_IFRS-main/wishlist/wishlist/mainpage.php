<!DOCTYPE html>
<html lang="pt">

<head>
  <title>HomePage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li>
            <a class="navbar-brand ms-auto"><img src="img/wishlist.png" width="100" weight="100" alt=""> </a>
          </li>
          <li class="nav-item">
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
  <br>


  <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start mt-5">
      <h1>Wishlist</h1>
      <h1>Crie e Organize uma lista de desejos com seus produtos favoritos!</h1>
    </div>
  </div>

  
  <div id="textointro" class=" container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start mt-5">
    <h5>Aqui você será capaz de criar uma lista de desejo com seus produtos favoritos.</h5>
    <h5>Basta somente adicionar um nome e o link do produto, e pronto, um novo item foi adicionado a sua lista.</h5>
    <h5>Muito simples, certo?!</h5>

  
  
  </div>
  <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <button class="btn btn-dark " onclick="window.location.href='form.php'">Começar</button>
  </div>

  <footer>
    <div class="text-center p-3 fixed-bottom bg-dark text-light">
      Created by Pedro do narga
    </div>
  </footer>
</body>

</html>