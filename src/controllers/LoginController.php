<?php

namespace Heitor\Memorilla\controllers;


use Heitor\Memorilla\models\carrinho\Cart;
use Heitor\Memorilla\models\carrinho\CartModel;
use Heitor\Memorilla\models\usuario\User;
use Heitor\Memorilla\models\usuario\UserModel;

require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

class LoginController
{

    private UserModel $user;
    
    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function login(User $user)
    {
        $resposta = $this->user->login($user);
        session_start();

        if ($resposta) {
            $_SESSION['usuario_id'] = $resposta->getId();
            $_SESSION['usuario_email'] = $resposta->getEmail();
            $_SESSION['carrinho'] = new CartModel()->initializeCart();
            header("Location: /Memorilla/src/pages/index.php");
            exit();
        } else {
            $_SESSION['login_error'] = 'Usuário e/ou senha inválido(s)';
            header("Location: /Memorilla/src/pages/login.php");
            exit();
        }
    }
}
