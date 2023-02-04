<?php

require_once 'database.php';
require_once 'dao/FilmesDAO.php';

$filmesdao = new FilmesDAO($pdo);

$info = false;

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $info = $filmesdao->findById($id);
}

if ($info === false) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme</title>
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
            </ul>
        </div>
  </div>
</nav>
    <div class="container">
        <div class="container_filme my-3">
            <div class="margemDireito">
              <img src="assets/img_filmes/<?= $info->getPath(); ?>" class="img-thumbnail" alt="imagem">
            </div>
            <div>
                <h3><?= $info->getTitulo(); ?></h3>
                <label>Autor: </label> <?= $info->getAutor();?>
                <br>
                <label>Ano:</label> <?= $info->getAno(); ?>
                <h4 class="mt-2">SINOPSE</h4>
                <p class="descricaoFilme"><?= $info->getDescricao(); ?></p>
            </div>
        </div>
    </div>
</body>
</html>