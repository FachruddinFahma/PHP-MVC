<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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

    public function insertKamar($data)
    {
        $query = "INSERT INTO tb_kamar (id_kamar, fasilitas, kategori, ukuran, harga_harian, id_kost) 
                VALUES ('', :fasilitas, 'BULANAN', :ukuran, NULL, :harga_kamar, NULL, NULL, 'KOST01')";
        $this->db->query($query);
        $this->db->bind(':fasilitas', $data['fasilitas']);
        $this->db->bind(':ukuran', $data['ukuran']);
        $this->db->bind(':harga_kamar', $data['harga_kamar']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // public function deleteKamar($id_kamar)
    // {
    //     $query = "DELETE FROM tb_kamar WHERE id_kamar = :id_kamar";

    //     $this->db->query($query);
    //     $this->db->bind(':id_kamar', $id_kamar);
    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }
}
