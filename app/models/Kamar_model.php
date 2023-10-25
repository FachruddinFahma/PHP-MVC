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
        $query = "INSERT INTO tb_penghuni(`id_Penghuni`, `nama_penghuni`, `alamat`, `jenis_kelamin`, `agama`) VALUES ('', :nama_penghuni, :alamat, :jenis_kelamin, :agama)";
        $this->db->query($query);
        $this->db->bind('nama_penghuni', $data['nama_penghuni']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jenis_kelamin', $data['rdJK']);
        $this->db->bind('agama', $data['agama']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
