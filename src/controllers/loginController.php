<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/models/usuarioModel.php";

    class loginController{

        private $user;

        public function __construct()
        {
            $this->user = new UsuarioModel();
        }

        public function login(Usuario $user){
            $resposta = $this->user->login($user);
            session_start();
            
            if($resposta && $resposta->getId()) {
                $_SESSION['usuario_id'] = $resposta->getId();
                $_SESSION['usuario_email'] = $resposta->getEmail();
                header("Location: /Memorilla/src/pages/index.php");
                exit();
            } else {
                $_SESSION['login_error'] = 'Usuário e/ou senha inválido(s)';
                header("Location: /Memorilla/src/pages/login.php");
                exit();
            }
        }
    }
?>