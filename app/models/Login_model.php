<?php
class Login_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function prosesLogin($email, $password)
    {
        $query = "SELECT * FROM tb_user where email = :email AND password = :password";
        $this->db->query($query);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);

        return $this->db->single();
    }

    public function getKost($id)
    {
        $query = "SELECT * FROM tb_user JOIN tb_kost ON tb_user.id_user = tb_kost.id_user where tb_user.id_user = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    public function lupaPassword($email, $password)
    {
        $query = "UPDATE tb_user SET email = :email , password = :password";
    }

    // public function checkLogin($email, $password)
    // {
    //     $this->db->query("SELECT * FROM tb_user WHERE email = :email AND password = :password");
    //     $this->db->bind(':email', $email);
    //     $this->db->bind(':password', $password);

    //     $user = $this->db->single();

    //     if ($user) {
    //         return $user;
    //     }

    //     return null;
    // }


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
