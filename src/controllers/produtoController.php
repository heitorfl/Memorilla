<?php 

    require_once $_SERVER["DOCUMENT_ROOT"] . "\Memorilla\src\models\produtoModel.php";

    class ProdutoController{

        private $model;

        public function __construct()
        {
            $this->model = new ProdutoModel();
        }

        public function read() {
            return $this->model->read();
        }
        public function findId($id) {
            return $this->model->findId($id);
        }
        public function add(Produto $p) {
            return $this->model->create($p);
        }

    }

?>