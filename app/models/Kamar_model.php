<?php
class Kamar_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKamar()
    {
        $this->db->query('SELECT * FROM tb_kamar');
        return $this->db->resultSet();
    }

    // public function getPenghuniById($id_Penghuni)
    // {
    //     $this->db->query('SELECT * FROM tb_penghuni WHERE id_Penghuni = :id');
    //     $this->db->bind('id', $id_Penghuni);
    //     return $this->db->single();
    // }

    public function addKamar($data)
    {
        $query = "INSERT INTO tb_kamar(id_kamar, fasilitas, ukuran, harga) VALUES (:id_kamar, :fasilitas_kamar, :ukuran_kamar, :harga_kamar)";

        $this->db->query($query);

        $this->db->bind(':id_kamar', $data['id_kamar']);
        $this->db->bind(':fasilitas_kamar', $data['fasilitas_kamar']);
        $this->db->bind(':ukuran_kamar', $data['ukuran_kamar']);
        $this->db->bind(':harga_kamar', $data['harga_kamar']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
