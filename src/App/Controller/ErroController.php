<?php
/**
 *
 * Classe ErroController
 *
 */
namespace App\Controller;
use \Core\View\TemplateWFW as Template;

class ErroController extends \Core\Controller\Controller {

	protected $template;

	public function __construct() {
		parent::__construct();
		$this->template = new Template("../View/home.tpl");
	}

	public function index() {

		$this->template->parse([
				"flashmsg"   => "Erro",
				"contents"   => "erros/erro.tpl",
				"content"    => [
					"titulo"    => "Um erro ocorreu",
					"subtitulo" => "",
					"conteudo"  => "Um recurso solicitado não foi localizado."
				]
			]);
	}

}
