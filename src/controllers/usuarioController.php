<?php 

class UsuarioController {

    private $model;

    function __construct()
    {
        $this->model = new UsuarioModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Usuario $c) {
        if($this->model->create($c)){
            FlashMessage::setMessage("usuário cadastrado com sucesso!", 1);
            return true;
        } else {
            FlashMessage::setMessage("Erro!", 0);
            return false;
        }
    }
    
    public function findId($id) {
        return $this->model->findId($id);
    }

}
?>