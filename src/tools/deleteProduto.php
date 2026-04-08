<?php

use Heitor\Memorilla\controllers\CartItemsController;
use Heitor\Memorilla\models\produto\Product;

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['remover_id'];
    $controller = new CartItemsController();
    $controller->remove(new Product()->setId($id));
}
header('location: ' . $_SERVER['HTTP_REFERER']);