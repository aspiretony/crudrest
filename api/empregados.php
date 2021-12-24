<?php

class Empregados{
    private $db;
    private $tabela_db = "empregados";

    public $id;
    public $nome;
    public $email;
    public $setor;
    public $criado;
    public $modificado;
    public $resultado;

    public function __construct($db){
        $this->db = $db;
    }

    public function getEmpregados(){
        $sql = "SELECT * From ".$this->tabela_db. "";
        $this->resultado = $this->db->query($sql);
        return $this->resultado;
    }

    public function createEmpregados(){
        $this->nome=htmlspecialchars(strip_tags($this->nome));
        $this->setor=htmlspecialchars(strip_tags($this->setor));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->criado=htmlspecialchars(strip_tags($this->criado));

        $sql = "INSERT INTO ". $this->db_table ." SET nome = '".$this->nome."',  email = '".$this->email."', setor = '".$this->setor."',criado = '".$this->criado."'";
        $this->db->query($sql);
        if($this->db->affected_rows > 0){
        return true;
        }else{
            return false;
        }


    }
}