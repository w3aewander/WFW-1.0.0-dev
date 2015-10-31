<?php
 /**
  * OlamundoController.php
  *
  */

  namespace App\Controller;

  use \Core\View\TemplateWFW as Template;
  use \App\Model\Exemplo as Exemplo;

  class OlamundoController extends \Core\Controller\Controller{

         protected $template;
         protected $model;

         public function __construct(){
               parent::__construct();
               $this->template = new Template("../View/olamundo.tpl");
               $this->model = new Exemplo;
               
         }
         public function index(){
             $data["flashmsg"] = "Olá mundo!";
             $data["arr_data"] = $this->showData();

             $this->template->parse($data);    
         }

         public function submit(){
            $codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT );
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING );
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );

            $arr_data = [
                    "codigo"=>$codigo,
                    "nome"=>$nome,
                    "email"=>$email
             ];
 
            if ( $codigo !== "0" ):
            $arr_data = [
                    "codigo"=>$codigo,
                    "nome"=>$nome,
                    "email"=>$email
             ];

                $this->model->save($arr_data);
            else:
            $arr_data = [
                    "nome"=>$nome,
                    "email"=>$email
             ];

                $this->model->insert($arr_data);        
            endif;

         }

         public function showData(){
             $arr_data = [];
             foreach ( $this->model->show_all() as $m ):
                $arr_data[] = $m;
             endforeach;

             return $arr_data;
         }
   }

