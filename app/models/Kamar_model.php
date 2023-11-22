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

    public function getAllKamar($id_kost)
    {
        $this->db->query('SELECT * FROM tb_kamar WHERE id_kost = :id_kost');
        $this->db->bind(':id_kost', $id_kost);
        return $this->db->resultSet();
    }

    // public function getPenghuniById($id_Penghuni)
    // {
    //     $this->db->query('SELECT * FROM tb_penghuni WHERE id_Penghuni = :id');
    //     $this->db->bind('id', $id_Penghuni);
    //     return $this->db->single();
    // }

    // Model
    // public function insertKamar($kamar)
    // {
    //     $query = "INSERT INTO tb_kamar (id_kamar, nama_kamar, kategori, fasilitas, ukuran, harga_harian, harga_bulan, harga_3bulan, harga_tahun, id_kost) 
    //             VALUES ('', :nama_kamar, :fasilitas, :kategori, :ukuran, :harga_harian, :harga_bulanan, :harga_3bulan, :harga_tahun, 'KOST01')";

    //     $this->db->query($query);
    //     $this->db->bind(':nama_kamar', $kamar['nama_kamar']);
    //     $this->db->bind(':fasilitas', $kamar['fasilitas']);
    //     $this->db->bind(':kategori', $kamar['kategori']);
    //     $this->db->bind(':ukuran', $kamar['ukuran']);
    //     $this->db->bind(':harga_harian', $kamar['harga_harian']);
    //     $this->db->bind(':harga_bulan', $kamar['harga_bulan']);
    //     $this->db->bind(':harga_3bulan', $kamar['harga_3bulan']);
    //     $this->db->bind(':harga_tahun', $kamar['harga_tahun']);
    //     $this->db->execute();
    //     return $this->db->rowCount();
    // }

    // models Kamar_model
    public function addKamar($kamar, $id_kost)
    {
        $query = "INSERT INTO tb_kamar VALUES ('', :nama_kamar, :fasilitas, :kategori, :ukuran, :harga_harian, :harga_bulanan, :harga_3bulan, :harga_tahunan, :id_kost)";
        $this->db->query($query);
        $this->db->bind(':nama_kamar', $kamar['nama_kamar']);
        $this->db->bind(':fasilitas', $kamar['fasilitas']);
        $this->db->bind(':kategori', $kamar['kategori']);
        $this->db->bind(':ukuran', $kamar['ukuran']);
        $this->db->bind(':harga_harian', $kamar['harga_harian']);
        $this->db->bind(':harga_bulanan', $kamar['harga_bulanan']);
        $this->db->bind(':harga_3bulan', $kamar['harga_3bulan']);
        $this->db->bind(':harga_tahunan', $kamar['harga_tahunan']);
        $this->db->bind(':id_kost', $id_kost);
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
