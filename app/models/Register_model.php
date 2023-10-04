<?php
    class Register_model{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function registerUser($username, $password)
        {
            $query = "INSERT INTO tb_login (username, password) VALUES (:username, :password)";
            $this->db->query($query);
            $this->db->bind(':username', $username);
            $this->db->bind(':password', $password);

            return $this->db->execute();
        }
    }
?>