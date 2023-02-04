<?php

require_once "Model/Filmes.php";

class FilmesDAO {
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Filmes $f){
        $sql = $this->pdo->prepare("INSERT INTO filmes(filme_titulo,filme_autor,filme_descricao,filme_ano,filme_path) VALUES(:titulo,:autor,:descricao,:ano, :caminhoimg)");
        $sql->bindValue(':titulo', $f->getTitulo());
        $sql->bindValue(':autor', $f->getAutor());
        $sql->bindValue(':descricao', $f->getDescricao());
        $sql->bindValue(':ano', $f->getAno());
        $sql->bindValue(':caminhoimg', $f->getPath());
        $sql->execute();

        $f->setId($this->pdo->lastInsertId());
        return $f;
    }

    public function findAll($busca=""){
        $array = [];
        $sql = $this->pdo->prepare("SELECT * FROM filmes WHERE filme_titulo LIKE :pesquisa");
        $sql->bindValue(":pesquisa","%".$busca."%");
        $sql->execute();
        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();

            foreach($dados as $item){
                $data = new Filmes();
                $data->setId($item['filme_id']);
                $data->setTitulo($item['filme_titulo']);
                $data->setAutor($item['filme_autor']);
                $data->setDescricao($item['filme_descricao']);
                $data->setAno($item['filme_ano']);
                $data->setPath($item['filme_path']);

                $array[] = $data;

            }            
        }

        return $array;
    }

    public function findById($id){
        $sql = $this->pdo->prepare("SELECT * FROM filmes WHERE filme_id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $u = new Filmes();
            $u->setId($data['filme_id']);
            $u->setTitulo($data['filme_titulo']);
            $u->setAutor($data['filme_autor']);
            $u->setDescricao($data['filme_descricao']);
            $u->setAno($data['filme_ano']);
            $u->setPath($data['filme_path']);

            return $u;
        } else {
            return false;
        }
    }
}

?>