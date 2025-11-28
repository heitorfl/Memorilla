<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/models/conexao.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Memorilla/src/models/produto.php";

    class ProdutoModel{

        private $table = "produtos";

        public function create(Produto $p)
        {
            try {
                // Cria string SQL
                $sql = "insert into $this->table 
                        (nome, preco, descricao) 
                        values (?,?,?)";
                $stmt = Conexao::getConn()->prepare($sql);

                $stmt->bindValue(1, $p->getNome());
                $stmt->bindValue(2, $p->getPreco());
                $stmt->bindValue(3, $p->getDescricao());

                return $stmt->execute();
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
                echo " Número: " . (int)$e->getCode();
            } 
        }
        public function read()
        {
            $stmt = Conexao::getConn()->prepare("select * from $this->table");
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Produto');
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function findId($id)
        {
            $stmt = Conexao::getConn()->prepare("select * from $this->table where id=?");
            $stmt->bindValue(1, $id);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Produto');
            $stmt->execute();
            return $stmt->fetch();
        }

    }
?>