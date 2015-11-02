<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

class Artigo extends \Core\Model\AppModel {

    public function __construct() {

        parent::__construct();

        $this->setEntity('artigos');
        $this->setup();
    }

    public function setup() {

        $table_name = "artigos";

        $fields = [
            "id" => "integer not null primary key auto_increment",
            "categoria_id" => "integer not null",
            "titulo" => "varchar(255)",
            "subtitulo" => "varchar(255)",
            "conteudo" => "text",
            "created_at" => "datetime",
            "updated_at" => "datetime"
        ];

        $this->create_table($table_name, $fields);
    }

}
