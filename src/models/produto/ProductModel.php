<?php


namespace Heitor\Memorilla\models\produto;

use Heitor\Memorilla\models\Conexao;
use PDO;
use PDOException;

require_once $_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php";


class ProductModel
{

    private $table = "produtos";

    public function create(Product $p): bool|string
    {
        try {
            $stmt = Conexao::getConn()->prepare("INSERT INTO $this->table (type, nome, preco, descricao) VALUES (?,?,?,?)");
            $stmt->bindValue(1, $p->getTipo());
            $stmt->bindValue(2, $p->getNome());
            $stmt->bindValue(3, $p->getPreco());
            $stmt->bindValue(4, $p->getDescricao());

            return $stmt->execute();
        } catch (PDOException $e) {
            return "Erro: " . $e->getMessage() . " Número: " . $e->getCode();
        }
    }

    public function read(): array
    {
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE tipo != 'Ingresso' ORDER BY tipo DESC ");
        $stmt->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id): mixed
    {
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $stmt->execute();
        return $stmt->fetch();
    }
}
