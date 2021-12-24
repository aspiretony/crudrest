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
            $this->db = new mysqli(servidor_sql,usuario_sql,senha_sql,banco_de_dados);
         //   print "Banco conectado";
        }catch (Exception $e){
            print "DataBase não conectada: ". $e->getMessage();
        }
        return $this->db;
    }
}

