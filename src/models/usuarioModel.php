<?php 
    require_once "usuario.php";
    require_once "conexao.php";

    class UsuarioModel{

        private $table = 'usuario';

    public function create(Usuario $c)
    {
        try {
            // Cria string SQL
            $sql = "insert into $this->table 
                    (email, senha) 
                    values (?,?)";
            $stmt = Conexao::getConn()->prepare($sql);

            $stmt->bindValue(1, $c->getEmail());
            $stmt->bindValue(2, $c->getSenha());

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        } 
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->table where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function login(Usuario $c)
    {
        $stmt = Conexao::getConn()->prepare("select * from usuario where email=? and senha=?");
        $stmt->bindValue(1, trim($c->getEmail()));
        $stmt->bindValue(2, trim($c->getSenha()));
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }
    public function checkToken($id){
        $stmt = Conexao::getConn()->prepare("select token from $this->table where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }
    public function changeToken($id){
        $stmt = Conexao::getConn()->prepare("update from $this->table set token=1 where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }
    }
?>