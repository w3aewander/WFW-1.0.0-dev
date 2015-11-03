<?php


namespace App\Controller;

class AdminCategoriasController extends \Core\Controller\Controller {
    
        private $categorias;
        
        public function __construct(){
            parent::__construct();
            $this->categorias = new \App\Model\Categoria();
            
        }
        public function salvar() {

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $arr_data = [
            'id' => $id,
            'descricao' => $descricao,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ];

        $retval = "";

        if ( $id == 0 ):
            $retval = $this->categorias->insert($arr_data);
        else :
            $to_find = $this->categorias->find_one($id);
            $retval = $this->categorias->save($to_find->id, $arr_data);
        endif;

        return $retval;
    }

    public function excluir($id) {
        return $this->categorias->remove($id);
    }

    public function listar() {
        return json_encode($this->categorias->show_all());
    }

    public function exibir($id) {
        return json_encode($this->categorias->find_one($id));
    }

    
}

