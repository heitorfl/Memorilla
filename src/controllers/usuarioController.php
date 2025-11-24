<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/models/usuarioModel.php";

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
        public function add(Usuario $c) {
            return $this->model->create($c);
        }
        public function checkToken(Usuario $c){
            return $this->model->checkToken($c);
        }
        public function changeToken(Usuario $c){
            return $this->model->changeToken($c);
        }
    }
?>