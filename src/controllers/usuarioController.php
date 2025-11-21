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

    public function findId($id) {
        return $this->model->findId($id);
    }

}
?>