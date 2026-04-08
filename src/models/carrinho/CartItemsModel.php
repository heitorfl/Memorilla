<?php

namespace Heitor\Memorilla\models\carrinho;

use Heitor\Memorilla\models\Conexao;
use Heitor\Memorilla\models\produto\Product;
use PDO;
use PDOException;

class CartItemsModel
{
    private $table = 'itenscarrinho';

    private function checkProdutos(Product $produto): bool
    {
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_produto = ?");
        $stmt->bindValue(1, $produto->getId());
        $stmt->execute();
        $result = $stmt->rowCount();
        return $result > 0;
    }

    public function addToCart(Product $produto, int $quantidade): bool
    {
        $model = new CartModel();
        try {
            if (!$this->checkProdutos($produto)) {
                $stmt = Conexao::getConn()->prepare("INSERT INTO $this->table (id_produto, id_carrinho, quantidade) VALUES (?,?,?)");
                $stmt->bindValue(1, $produto->getId());
                $stmt->bindValue(2, $model->getIdCart());
                $stmt->bindValue(3, $quantidade);
            } else {
                $stmt = Conexao::getConn()->prepare("UPDATE $this->table SET quantidade = ? WHERE id_produto = ? AND id_carrinho = ?");
                $stmt->bindValue(1, $quantidade);
                $stmt->bindValue(2, $produto->getId());
                $stmt->bindValue(3, $model->getIdCart());
                $alert = <<<FIM
                <script>
                    alert('O product já está adicionado ao carrinho! Adicionamos a quantidade digitada');   
                </script>
            FIM;
                print $alert;
            }
            return $stmt->execute();
        } catch (PDOException $e) {
            print 'Erro em adicionar product ao carrinho! ' . PHP_EOL . 'Erro: ' . $e->getMessage() . PHP_EOL . 'Número: ' . $e->getCode() . PHP_EOL;
            return false;
        }
    }

    public function remove(Product $produto): bool
    {
        $stmt = Conexao::getConn()->prepare("DELETE FROM $this->table WHERE id_produto = ?");
        $stmt->bindValue(1, $produto->getId());
        return $stmt->execute();
    }

    public function loadCart(): array
    {
        $model = new CartModel();
        $stmt = Conexao::getConn()->prepare(
        "SELECT produtos.id, $this->table.quantidade, nome, preco, descricao, imagem 
                FROM produtos  
                INNER JOIN $this->table ON produtos.id = id_produto 
                WHERE id_carrinho = ?"
        );
        $stmt->bindValue(1, $model->getIdCart());
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function cartTotalValue(): ?string
    {
        $model = new CartModel();
        $stmt = Conexao::getConn()->prepare("
            SELECT itenscarrinho.quantidade, produtos.preco 
            FROM $this->table 
            INNER JOIN produtos ON itenscarrinho.id_produto = produtos.id
            WHERE itenscarrinho.id_carrinho = ?
        ");
        $stmt->bindValue(1, $model->getIdCart());
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array = $stmt->fetchAll();
        // Reduz os valores retornados a um só
        $totalValue = array_reduce(
            // Como o fetchAll() retorna um array de arrays, é preciso usar a array_keys() pra poder acessar os valores
            array_keys($array),
            function ($total, $key) use ($array) {
                $value = (float)($array[$key]['preco'] * $array[$key]['quantidade']);
                return $total + $value;
            },
            0
        );
        // Formata o valor para 'xxx.xxx, xx'
        return number_format($totalValue, 2, ',', '.');
    }
}