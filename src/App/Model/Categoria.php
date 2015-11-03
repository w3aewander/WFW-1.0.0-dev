<?php

namespace App\Model;

class Categoria extends \Core\Model\AppModel {

    public function __construct() {

        parent::__construct();

        $this->setEntity('categorias');
        $this->setup();
    }

    public function setup() {

        $table_name = "categorias";

        $fields = [
            "id" => "integer not null primary key auto_increment",
            "descricao" => "varchar(255)",
            "created_at" => "datetime",
            "updated_at" => "datetime"
        ];

        $this->create_table($table_name, $fields);
    }

}
