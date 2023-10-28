<?php
    class Login_model {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function prosesLogin($email, $password)
        {
            $query = "SELECT * FROM tb_user WHERE email = :email AND password = :password";
            $this->db->query($query);
            $this->db->bind(':email', $email);
            $this->db->bind(':password', $password);
            
            return $this->db->single();
        }

    }
?>