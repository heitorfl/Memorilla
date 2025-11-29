<?php 
    class Usuario{
        private $id;
        private $email;
        private $senha;
        private $token = 0;

        public function __construct($_email, $_senha)
        {
                $this->setEmail($_email);
                $this->setSenha($_senha);
        }
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        /**
         * Get the value of token
         */ 
        public function getToken()
        {
                return $this->token;
        }

        /**
         * Set the value of token
         *
         * @return  self
         */ 
        public function setToken($token)
        {
                $this->token = $token;

                return $this;
        }
    }
?>