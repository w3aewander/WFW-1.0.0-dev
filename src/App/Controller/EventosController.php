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

class EventosController extends \Core\Controller\Controller {

	private $template;

	public function __construct() {
		parent::__construct();
		$this->template = new Template("../View/home.tpl");
	}

	public function index() {
		$this->template->parse([
				"flashmsg" => "Eventos",
				"contents" => "eventos/eventos.tpl",
				"content"  => [
					["titulo" => "Evento 1", "subtitulo" => "subtitulo Evento 1", "conteudo" => "Conteúdo  1"],
					["titulo" => "Evento 2", "subtitulo" => "subtitulo Evento 2", "conteudo" => "Conteúdo  2"],
					["titulo" => "Evento 3", "subtitulo" => "subtitulo Evento 3", "conteudo" => "Conteúdo  3"],
					["titulo" => "Evento ", "subtitulo" => "subtitulo Evento 4", "conteudo" => "Conteúdo  4"],
					["titulo" => "Evento 5", "subtitulo" => "subtitulo Evento 5", "conteudo" => "Conteúdo  5"],
				]
			]);
	}

}
