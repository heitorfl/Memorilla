<?php

namespace Heitor\Memorilla\controllers;



use Heitor\Memorilla\models\produto\Product;
use Heitor\Memorilla\models\produto\ProductModel;

require_once $_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php";

class ProductController
{

    private ProductModel $model;

    public function __construct() {
        $this->model = new ProductModel();
    }

    public function read()
    {
        return $this->model->read();
    }
    public function findId($id)
    {
        return $this->model->findId($id);
    }
    public function add(Product $p)
    {
        return $this->model->create($p);
    }
}
