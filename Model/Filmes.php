<?php

class Filmes {
    private $id;
    private $titulo;
    private $autor;
    private $descricao;
    private $ano;
    private $caminhoimg;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }

    public function getPath(){
        return $this->caminhoimg;
    }
    public function setPath($caminhoimg){
        $this->caminhoimg = $caminhoimg;
    }

}

?>