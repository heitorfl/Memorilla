<?php

namespace Heitor\Memorilla\controllers;

use Heitor\Memorilla\models\carrinho\CartItems;
use Heitor\Memorilla\models\carrinho\CartItemsModel;
use Heitor\Memorilla\models\produto\Product;

class CartItemsController
{
    private CartItemsModel $model;

    public function __construct(){
        $this->model = new CartItemsModel();
    }

    public function addToCart(Product $produto, int $quantidade): bool
    {
        return $this->model->addToCart($produto, $quantidade);
    }

    public function remove(Product $produto): bool
    {
        return $this->model->remove($produto);
    }

    public function loadCart(): array
    {
        return $this->model->loadCart();
    }

    public function cartTotalValue(): ?string
    {
        return $this->model->cartTotalValue();
    }
}