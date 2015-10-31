<?php
/**
 *
 * Classe ModuloController
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0alpha-dev
 *
 */

namespace App\Controller;

use \Core\View\TemplateWFW as Template;

class ModuloController extends \Core\Controller\Controller {

	protected $template;
	private $data = [];

	public function __construct() {

		parent::__construct();

		$this->template         = new Template('../View/modulos/modulo_php.tpl');
		$this->data["flashmsg"] = "Módulo Tutoria PHP OO";

	}

	public function index() {
		$tpl_modulos = new Template('../View/modulos/modulos_lista.tpl');
		$this->data  = [
			"titulo"    => "Módulos Tutoriais disposníveis",
			"subtitulo" => "",
			"conteudo"  => "Lista dos módulos aqui..."];

		$tpl_modulos->parse($this->data);

	}

	public function loadModule($url, $titulo = "") {

		$this->data = [
			"titulo"    => strtoupper($url),
			"subtitulo" => "xxxx",
			"conteudo"  => "Aqui falaremos sobre ".strtoupper($url)];

		$this->template->parse($this->data);

	}

}
