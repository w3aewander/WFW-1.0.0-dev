<?php

/**
 *
 * Classe ArtigosController
 *
 *
 *
 */

namespace App\Controller;

use \Core\View\TemplateWFW as Template;

class ArtigosController extends \Core\Controller\Controller {

    private $template;
    protected $artigos;

    public function __construct() {
        parent::__construct();
        $this->template = new Template("../View/home.tpl");
        $this->artigos = new \App\Model\Artigo();
    }

    public function index() {
        $data = [
        "flashmsg" => "Artigos",
        "contents" => "artigos/content.tpl",
        "content" => [
        ["titulo" => "Artigo 1", "subtitulo" => "subtitulo do artigo 1", "conteudo" => "Conteúdo do artigo 1"],
        ["titulo" => "Artigo 2", "subtitulo" => "subtitulo do artigo 2", "conteudo" => "Conteúdo do artigo 2"],
        ["titulo" => "Artigo 3", "subtitulo" => "subtitulo do artigo 3", "conteudo" => "Conteúdo do artigo 3"],
        ["titulo" => "Artigo 4", "subtitulo" => "subtitulo do artigo 4", "conteudo" => "Conteúdo do artigo 4"],
        ["titulo" => "Artigo 5", "subtitulo" => "subtitulo do artigo 5", "conteudo" => "Conteúdo do artigo 5"],
        ]
        ];
        $this->template->parse($data);
    }

}
