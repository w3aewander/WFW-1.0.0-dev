<?php
/**
* Controlador padrao do Framework
* @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
* @version 1.0
*
*/

namespace Core\Controller;


abstract class Controller {

	protected $model = "";
	protected $view = ""; 
	protected $viewfile;

	public function __construct(){

	}

	public  function submit(){}

    /**
     * Arquivo vidw gerado dinamicamente pelo framework
     * 
     * @param string $viewfile Nome do arquivo gravado fisicamente no disco.
     * @return none 
     */
    public function setViewFile($viewfile) {
    	$this->viewfile = $viewfile;
    }

    /**
     * Obtém o nome do arquivo que será gerado automaticamente
     * 
     * @return type
     */
    public function getViewFile() {
    	return $this->viewfile;
    }

}
