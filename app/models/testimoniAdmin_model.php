<?php
class Penghuni_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getDataTestimoni()
    {
        $this->db->query("SELECT * FROM tb_user WHERE tb_user.id_role = '3'");
        return $this->db->resultSet();
    }
    public function getUserById($id_user)
    {
        $this->db->query("SELECT * FROM tb_user WHERE id_user = :id");
        $this->db->bind('id', $id_user);
        return $this->db->resultSet();
    }

    public function getAllTestimoniByUserId($id_user)
    {
        $this->db->query("SELECT tb_user.id_user, tb_testimoni.deskripsi_testi
        FROM tb_user
        JOIN tb_testimoni ON tb_user.id_user = tb_testimoni.id_user
        WHERE tb_user.id_user = :id_user");
        
        $this->db->bind(':id_user', $id_user);
        return $this->db->resultSet();
    }
}