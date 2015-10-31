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

class ApresentacoesController extends \Core\Controller\Controller {

	private $template;

	public function __construct() {
		parent::__construct();
		$this->template = new Template("../View/home.tpl");
	}

	public function index() {
		$this->template->parse([
				"flashmsg" => "Apresentações",
				"contents" => "apresentacoes/content.tpl",
				"content"  => [
					["titulo" => "Apresentação 1", "subtitulo" => "subtitulo Apresentação 1", "conteudo" => "Conteúdo  1"],
					["titulo" => "Apresentação 2", "subtitulo" => "subtitulo Apresentaçãoação 2", "conteudo" => "Conteúdo  2"],
					["titulo" => "Apresentação 3", "subtitulo" => "subtitulo Apresentação 3", "conteudo" => "Conteúdo  3"],
					["titulo" => "Apresentação 4", "subtitulo" => "subtitulo Apresentação 4", "conteudo" => "Conteúdo  4"],
					["titulo" => "Apresentação 5", "subtitulo" => "subtitulo Apresentação 5", "conteudo" => "Conteúdo  5"],
				]
			]);
	}

}
