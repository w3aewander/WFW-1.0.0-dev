<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

/**
 * Description of CategoriasController
 *
 * @author wanderlei
 */
use \Core\View\TemplateWFW as Template;

class CategoriasController extends \Core\Controller\Controller {

    private $template;
    protected $categorias;

    public function __construct() {
        parent::__construct();
        $this->categorias = new \App\Model\Categoria();
        $this->template = new Template("../View/home.tpl");
    }

    public function index() {
        $data = [
            "flashmsg" => "Categorias",
            "contents" => "categorias/content.tpl",
            "content" => [
                ["titulo" => "Categoria 1", "subtitulo" => "subtitulo da categoria 1", "conteudo" => "Conteúdo da categoria 1"],
                ["titulo" => "Categoria 2", "subtitulo" => "subtitulo da categoria 2", "conteudo" => "Conteúdo da categoria 2"],
                ["titulo" => "Categoria 3", "subtitulo" => "subtitulo da categoria 3", "conteudo" => "Conteúdo da categoria 3"],
                ["titulo" => "Categoria 4", "subtitulo" => "subtitulo da categoria 4", "conteudo" => "Conteúdo da categoria 4"],
            ]
        ];

        return $this->template->parse($data);
    }

}
