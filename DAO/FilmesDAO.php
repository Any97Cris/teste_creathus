<?php

require_once "Model/Filmes.php";

class FilmesDAO {
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Filmes $f){
        $sql = $this->pdo->prepare("INSERT INTO filmes(filme_titulo,filme_autor,filme_descricao,filme_ano) VALUES(:titulo,:autor,:descricao,:ano)");
        $sql->bindValue(':titulo', $f->getTitulo());
        $sql->bindValue(':autor', $f->getAutor());
        $sql->bindValue(':descricao', $f->getDescricao());
        $sql->bindValue(':ano', $f->getAno());
        $sql->execute();

        $f->setId($this->pdo->lastInsertId());
        return $f;
    }
}

?>