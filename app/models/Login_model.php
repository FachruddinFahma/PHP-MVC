<?php
class Login_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function prosesLogin($email)
    {
        // Hash password menggunakan MD5 sebelum melakukan query
        // $hashedPassword = md5($password);
        // $query = "SELECT * FROM tb_user WHERE email = :email AND password = :password";
        // $this->db->query($query);
        // $this->db->bind(':email', $email);
        // $this->db->bind(':password', $hashedPassword);

        // return $this->db->single();

        $query = "SELECT * FROM tb_user WHERE email = :email";
        $this->db->query($query);
        $this->db->bind(':email', $email);

        return $this->db->single();
    }
    public function getKost($id)
    {
        $query = "SELECT * FROM tb_user JOIN tb_kost ON tb_user.id_user = tb_kost.id_user where tb_user.id_user = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    public function updatePassword($email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE tb_user SET password = :password WHERE email = :email";
        $this->db->query($query);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $hashedPassword);
        
        return $this->db->execute();
    }

    public function getUserByEmail($email)
    {
        $this->db->query("SELECT * FROM tb_user WHERE email = :email");
        $this->db->bind(':email', $email);
        return $this->db->single();
    }

    public function getKostByEmail($email)
    {
        $this->db->query("SELECT * FROM `tb_kost` WHERE id_user = :email");
        $this->db->bind(':email', $email);
        return $this->db->single();
    }
}
