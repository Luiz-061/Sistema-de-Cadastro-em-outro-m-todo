<?php 

class Pessoa {
    private  $id;
    private  $nome;
    private  $profissao;


    public function setId( $id){$this->id = $id;}
    public function setNome( $nome){$this->nome = $nome;}
    public function setProfissao( $profissao){$this->profissao=$profissao;}

    public function getId(){return $this->id;}
    public function getNome(){return $this->nome;}
    public function getProfissao(){return $this->profissao;}
}




?>