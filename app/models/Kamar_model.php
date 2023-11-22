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
        $query = "INSERT INTO `tb_kamar`(`id_kamar`, `fasilitas`, `kategori`, `ukuran`, `harga_harian`, `harga_bulanan`, `harga_3bulanan`, `harga_tahunan`, `id_kost`) VALUES (':id_kamar',':fasilitas',':kategori',':ukuran', NULL,':harga_kamar', NULL, NULL,'[:id_kost')";

        $this->db->query($query);
        $this->db->bind(':id_kamar', $data['id_kamar']);
        $this->db->bind(':fasilitas', $data['fasilitas']);
        $this->db->bind(':kategori',  $data['kategori']);
        $this->db->bind(':ukuran', $data['ukuran']);
        $this->db->bind(':harga_kamar', $data['harga_kamar']);
        $this->db->bind(':id_kost', $data['id_kost']);
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
