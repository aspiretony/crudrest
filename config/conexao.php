<?php

require_once('db.php');

class Database {

    public $db;

    /**
     * @return mixed
     */
    public function pegaConexao()
    {
       $this->db = null;

        try {
            $this->db = new mysqli("$host","$usuario","$senha","$banco_de_dados");
            print "Banco conectado";
        }catch (Exception $e){
            print "DataBase não conectada: ". $e->getMessage();
        }
        return $this->db;
    }
}

