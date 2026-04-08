<?php


namespace Heitor\Memorilla\models\usuario;

use Heitor\Memorilla\models\carrinho\CartModel;
use Heitor\Memorilla\models\Conexao;

require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

class UserModel
{

    private $table = 'usuario';

    public function create(User $c): bool
    {
        try {
            $sql = "INSERT INTO $this->table (email, senha) VALUES (?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getEmail());
            $stmt->bindValue(2, $c->getSenha());
            $stmt->execute();
            return $stmt->rowCount() > 0;
        } catch (\PDOException $e) {
            return "Erro: " . $e->getMessage() . " Número: " . (int)$e->getCode();
        }
    }

    public function read(): array
    {
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, User::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId(int $id): User
    {
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, User::class);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function login(User $c)
    {
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE email=? AND senha=?");
        $c->getEmail()
            |> trim(...)
            |> (fn($x) => $stmt->bindValue(1, $x));
        $c->getSenha()
            |> trim(...)
            |> (fn($x) => $stmt->bindValue(2, $x));
        $stmt->setFetchMode(\PDO::FETCH_CLASS, User::class);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function checkToken(int $id): array
    {
        $stmt = Conexao::getConn()->prepare("SELECT `token` FROM $this->table WHERE id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function changeToken(int $id): User
    {
        if ($this->checkToken($id) == 1)
        {
            print <<<FIM
                <script>
                    alert('Você já possui o ingresso, redirecionando para a página...');   
                </script>
            FIM;
            header('location: personagens.php');
            exit();
        }
        $stmt = Conexao::getConn()->prepare("UPDATE $this->table SET token=1 WHERE id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, User::class);
        $stmt->execute();
        return $this->findId($id);
    }
}

?>