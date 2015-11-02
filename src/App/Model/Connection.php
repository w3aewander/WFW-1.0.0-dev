<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of Conexao
 *
 * @author wanderlei
 */
use App\Config\Config as Config;

class Connection {

    private $conn = null;
    private $config = null;
    
    public function __construct() {

        $this->config = new Config();
        
        if (!$this->conn = $this->getConnection()):
            die("Não foi possível conectar o banco de dados.");
        endif;
    }

    public function getConnection() {
        try {


            $dsn =  $this->config->getDsn();
            $user = $this->config->getUser();
            $pass = $this->config->getPass();
            
            
            //$dsn = "mysql:host=localhost;port=3306;dbname=wfw";
            //$user = "wfw";
            //$pass = "wfw123";

            $this->conn = new \PDO(
                    $dsn, $user, $pass, $this->config->getOptions()
            );

            return $this->conn;
        } catch (\PDOException $e) {

            die(sprintf("Erro no arquivo: %s<br>Linha: %s<br>Erro: %s<br>",
                   $e->getLine(),
                   $e->getFile(),
                   $e->getMessage() )
            );
        }
    }

    public function __destruct() {
        if ($this->conn):
            $this->conn = NULL;
        endif;
    }

}
