<?php

class FilmesDAO {
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Filmes $f){
        
    }
}

?>