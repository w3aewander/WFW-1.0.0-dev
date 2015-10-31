<?php
/**
 * OlamundoController.php
 *
 */

namespace App\Controller;

use \Core\View\TemplateWFW as Template;

class HomeController extends \Core\Controller\Controller {

	protected $template;
	protected $model;

	public function __construct() {
		parent::__construct();
		$this->template = new Template("../View/home.tpl");

	}
	public function index() {
		$data["flashmsg"] = "Página Inicial";

		$this->template->parse($data);
	}

}
