<?php
class Hakim_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllHakim()
    {
        $this->db->query('SELECT * FROM tb_penghuni ');
        return $this->db->resultSet();
    }

    public function addHakim($data)
    {
        $query = "INSERT INTO tb_penghuni VALUES ('', :nama_penghuni, :alamat, :jenis_kelamin, :agama, :foto)";
        $this->db->query($query);
        $this->db->bind('nama_penghuni', $data['nama_penghuni']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jenis_kelamin', $data['rdJK']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
