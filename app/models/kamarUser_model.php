<?php
class kamarUser_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // models
    public function getAllKost($id_kost)
    {
        $this->db->query("SELECT * FROM tb_kost WHERE id_kost = :id_kost");
        $this->db->bind(':id_kost', $id_kost);
        return $this->db->single();
    }


    public function getAllFotoKost($id)
    {
        $this->db->query("SELECT * FROM tb_foto_kost WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getAllKamar($id_kost)
    {
        $this->db->query("SELECT * FROM tb_kamar WHERE id_kost = :id_kost");
        $this->db->bind(':id_kost', $id_kost);
        return $this->db->resultSet();
    }
}
