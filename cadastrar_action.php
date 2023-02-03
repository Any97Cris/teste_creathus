<?php

require_once "database.php";
require_once "DAO/FilmesDAO.php";

$listraFilmes = new FilmesDAO($pdo);

$titulo = filter_input(INPUT_POST, 'filme_titulo');
$autor = filter_input(INPUT_POST, 'filme_autor');
$descricao = filter_input(INPUT_POST, 'filme_descricao');
$ano = filter_input(INPUT_POST, 'filme_ano');

if($titulo && $autor && $descricao && $ano){
    $novoFilme = new Filmes();
    $novoFilme->setTitulo($titulo);
    $novoFilme->setAutor($autor);
    $novoFilme->setDescricao($descricao);
    $novoFilme->setAno($ano);

    $listraFilmes->add($novoFilme);
   
    header("Location: index.php");
    exit;
}else{
    header("Location: cadastrar.php");
    exit;
}

?>