<?php

namespace App\Controller;

/**
 * Description of AdminController
 *
 * @author wanderlei
 */
use \Core\View\TemplateWFW as Template;

class AdminController extends \Core\Controller\Controller  {

    protected $template;

    public function __construct() {
        parent::__construct();

        $this->template = new Template("../View/home.tpl");

 
    }

    public function index() {
        $data = [
            "flashmsg" => "Área Administrativa",
            "contents" => "admin/admin.tpl",
            "content" => [
                "titulo" => "Área Administrativa",
                "subtitulo" => "Acesso Restrito",
                "conteudo" => "Área Administrativa",      
            ]
        ];

        return $this->template->parse($data);
    }
    
    public function dashboard(){

        $template = new Template("../View/admin/dashboard.tpl");
        $template->parse(["flashmsg"=>"Dashboard"]);

    }

    public function categorias(){
            
        $out = file_get_contents('../View/admin/categorias.tpl') ;
        
        return $out;
    }
}
