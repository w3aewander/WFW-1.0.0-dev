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

    private function getConfigDB() {
        try {
            $xml = simplexml_load_file(__DIR__ . "/database.xml");

            $params = [];

            $attr = $xml->app_config_db;

            $params["dsn"] = $attr["dsn"];
            $params["user"] = $attr["user"];
            $params["pass"] = $attr["pass"];
            $params['options'] = [\PDO::ATTR_PERSISTENT => true, \PDO::ATTR_AUTOCOMMIT => true, \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];

            return $params;
            
        } catch (\Exception $ex) {
            die("Erro na linha: " . $ex->getLine() . " : " . $ex->getMessage());
        }
    }

    public function getDsn() {
        return $this->getConfigDB()["dsn"];
    }

    public function getUser() {
        return $this->getConfigDB()["user"];
    }

    public function getPass() {
        return $this->getConfigDB()["pass"];
    }

    public function getOptions() {
        return $this->getConfigDB()["options"];
    }

    protected function getConfigAppVersion() {
        return $APP_CONFIG_VERSION;
    }

}
