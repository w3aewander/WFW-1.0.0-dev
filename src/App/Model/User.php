<?php

/**
 *
 *
 *
 *
 */

namespace App\Model;

class User extends \Core\Model\AppModel {

    public function __construct() {
        parent::__construct();
        $this->setEntity('users');
        
        $table_name = "users";
        
        $fields = [
            "id"=>"integer not null primary key autoincrement",
            "nome"=>"varchar(100)",
            "login"=>"varchar(25)",
            "senha"=>"varchar(255)",
            "created_at"=>"datetime",
            "updated_at"=>"datetime"
        ];
        
        $this->create_table($table_name, $fields);
    }

}