<?php
    class Login_model {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function loginAdmin($username, $password)
        {
            $query = "SELECT * FROM tb_login WHERE username = :username AND password = :password";
            $this->db->query($query);
            $this->db->bind(':username', $username);
            $this->db->bind(':password', $password);
            return $this->db->resultSet();
        }

    }
?>