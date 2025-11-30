<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/components/auth.php";   
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/controllers/usuarioController.php";
    if($_SERVER['REQUEST_METHOD'] !== "GET"){
        header("location: /Memorilla/src/pages/ingresso.php");
        exit(1);
    } 
    else{
        $id = $_SESSION['usuario_id'];
        $user = new UsuarioController();
        $atualiza = $user->changeToken($id);
        header("location: /Memorilla/src/pages/personagens.php");
    }
?>