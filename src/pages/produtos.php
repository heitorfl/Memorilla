<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Memorilla/src/models/produto.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/models/produtoModel.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/controllers/produtoController.php";

    $produtos = new ProdutoController();
    $dados = $produtos->read();

?>