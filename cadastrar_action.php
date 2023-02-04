<?php

require_once "database.php";
require_once "DAO/FilmesDAO.php";

$listraFilmes = new FilmesDAO($pdo);

$titulo = filter_input(INPUT_POST, 'filme_titulo');
$autor = filter_input(INPUT_POST, 'filme_autor');
$descricao = filter_input(INPUT_POST, 'filme_descricao');
$ano = filter_input(INPUT_POST, 'filme_ano');
$caminhoimg = $_FILES['filme_path'];

// var_dump($caminhoimg);
// exit;

if($titulo && $autor && $descricao && $ano && $caminhoimg){  

        $extensao = strtolower(substr($_FILES['filme_path']['name'], -4));

        if($extensao == ".png" || $extensao == ".jpg"){
            $novoNome = md5(time()) . $extensao;
            $diretorio = "assets/img_filmes/";

            move_uploaded_file($_FILES['filme_path']['tmp_name'], $diretorio.$novoNome);

            $novoFilme = new Filmes();
            $novoFilme->setTitulo($titulo);
            $novoFilme->setAutor($autor);
            $novoFilme->setDescricao($descricao);
            $novoFilme->setAno($ano);
            $novoFilme->setPath($novoNome);

            $listraFilmes->add($novoFilme);
        
            header("Location: index.php");
            exit;
        }else{
            header("Location: cadastrar.php");
            exit;
        }       
    
}else{
    header("Location: cadastrar.php");
    exit;
}

?>