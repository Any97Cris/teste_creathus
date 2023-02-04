<?php

require_once "database.php";
require_once "DAO/FilmesDAO.php";
require_once "Model/Filmes.php";

$filmesdao = new FilmesDAO($pdo);

$listarfilmes = $filmesdao->findAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg corFundoMenu">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img class="iconeMenu" src="assets/img/logo_icone.png" alt="logo_icone">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active corLaranja" aria-current="page" href="index.php">
            <img src="assets/img/home.png" class="iconeMenu2" alt="icone_home">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cadastrar.php">
            <img src="assets/img/add-contact.png" class="iconeMenu2" alt="icone_adicionar">
          </a>
        </li>        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
        <button class="btn btn-light" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
    <h3 class="my-3">Últimos filmes adicionados</h1>
    <h6>Próximos Filmes</h6>

    <div class="container text-center">    
        <div class="row">
        
            <div class="col">col</div>
            <div class="col">col</div>
            <div class="col">col</div>
            <div class="col">col</div>
            <div class="col">col</div>
            <div class="col">col</div>
       
        </div>      
    </div>

</div>
    

</body>
</html>