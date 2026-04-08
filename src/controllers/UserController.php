<?php

namespace Heitor\Memorilla\controllers;

use Heitor\Memorilla\models\usuario\{User, UserModel};

require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

class UserController
{

    private UserModel $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function read()
    {
        return $this->model->read();
    }

    public function findId($id)
    {
        return $this->model->findId($id);
    }

    public function add(User $c)
    {
        return $this->model->create($c);
    }

    public function checkToken($c)
    {
        return $this->model->checkToken($c);
    }

    public function changeToken($c)
    {
        return $this->model->changeToken($c);
    }
}

?>