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
        public function lupaPassword($email, $password){
            $query = "UPDATE tb_user SET email = :email , password = :password";
            
        }

    public function checkLogin($email, $password){
        $this->db->query("SELECT * FROM tb_user WHERE email = :email AND password = :password");
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);

        $user = $this->db->single();

        if ($user) {
            return $user;
        }

        return null;
    }

    public function getUserByEmail($email)
    {
        $this->db->query("SELECT * FROM tb_user WHERE email = :email");
        $this->db->bind(':email', $email);
        return $this->db->single();
    }
}