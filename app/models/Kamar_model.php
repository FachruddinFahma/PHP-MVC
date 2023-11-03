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

    public function getPenghuniById($id_Penghuni)
    {
        $this->db->query('SELECT * FROM tb_penghuni WHERE id_Penghuni = :id');
        $this->db->bind('id', $id_Penghuni);
        return $this->db->single();
    }

    public function addKamar($data)
    {
        $query = "INSERT INTO tb_kamar(`id_kamar`, `nama_kamar`, `fasilitas_kamar`, `ukuran_kamar`, `harga_kamar`, `status_kamar`) VALUES (:id_kamar, :nama_kamar, :fasilitas_kamar, :ukuran_kamar, :harga_kamar, 'Kosong')";
        $this->db->query($query);

        foreach ($data as $key => $value) {
            $this->db->bind($key, $value);
        }

        $this->db->execute();
        return $this->db->rowCount();
    }
}
