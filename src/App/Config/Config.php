<?php

/**
 * Arquivo de configuracao do Framework
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 * config.php 
 *
 */

namespace App\Config;

class Config {
    
   private $xml = "";
   
   /**
    * Construtor padrão do sistema
    */
   public function __construct() {
       $this->xml = simplexml_load_file("../Config/config.xml");
   }
    /**
     * Retorna um array de parametros para o PDO de conexão com a base de dados
     * @return array
     */
    private function getConfigDB() {
        try {
            

            $params = [];

            $attr = $this->xml->app_config_db;

            $params["dsn"] = $attr["dsn"];
            $params["user"] = $attr["user"];
            $params["pass"] = $attr["pass"];
            $params['options'] = [\PDO::ATTR_PERSISTENT => true, \PDO::ATTR_AUTOCOMMIT => true, \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];

            return $params;
            
        } catch (\Exception $ex) {
            die("Erro na linha: " . $ex->getLine() . " : " . $ex->getMessage());
        }
    }

    /**
     * Retorna a string de conexão com a base de dados
     * @return string
     */
    public function getDsn() {
        return $this->getConfigDB()["dsn"];
    }

    /**
     * Retorna o o nome de usuário de acesso a base de dados.
     * @return string
     */
    public function getUser() {
        return $this->getConfigDB()["user"];
    }

    /**
     * Retorna a senha de acesso para a base de dados
     * @return string 
     */
    public function getPass() {
        return $this->getConfigDB()["pass"];
    }

    /**
     * Retorna atributos opcionais armazenados no arquivo xml para a conexão PDO atual.
     * @return array
     */
    public function getOptions() {
        return $this->getConfigDB()["options"];
    }

    /**
     * REtorna a versão atual do sistema
     * @return string
     * 
     */
    protected function getConfigAppVersion() {
        
        return $this->xml->app_config_version;
    }

    /**
     * Destrutor padrão da classe
     */
    public function __destruct(){
        $this->xml = null;
    }
}
