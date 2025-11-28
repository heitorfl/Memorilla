<?php 
    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
        exit();
    }
    // Controle de inatividade
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 900)) {
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }
    $_SESSION['last_activity'] = time();
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/models/produto.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/models/produtoModel.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/controllers/produtoController.php";

    $produtos = new ProdutoController();
    $dados = $produtos->read();
?>