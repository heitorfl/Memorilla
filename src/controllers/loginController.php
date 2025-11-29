<?php 
    require_once "usuarioModel.php";

    class loginController{

        private $user;

        public function __construct()
        {
            $this->user = new UsuarioModel();
        }

        public function login(Usuario $user){
            $resposta = $this->user->login($user);
            if($resposta){
                header("location: ./src/pages/");
            }
            else{
                print "<script>alert('Usuário e/ou senha inválido(s)')</script>";
            }
        }
    }
?>