<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Filme</title>
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
    <h3 class="my-3">Cadastrar Filme</h1>
    <form method="POST" action="cadastrar_action.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Arquivo</label>
            <input type="file" class="form-control" name="filme_path">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="filme_titulo" placeholder="Digite titulo do filme">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Autor</label>
            <input type="text" class="form-control" name="filme_autor" placeholder="Digite Autor do filme">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ano</label>
            <input type="text" class="form-control" name="filme_ano" placeholder="Digite Ano do filme">
        </div>
        <div class="mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control" name="filme_descricao" rows="3" placeholder="Digite Descriçãodo filme"></textarea>
        </div>

        <input type="submit" class="btn btn-light" value="Cadastrar">
    
    </form>

</div>
    

</body>
</html>