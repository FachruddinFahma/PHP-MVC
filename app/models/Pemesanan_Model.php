<?php
class Pemesanan_Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPemesananMasuk()
    {
        $this->db->query("SELECT * FROM tb_user WHERE tb_user.id_role = '3'");
        return $this->db->resultSet();
    }

    public function getPemesananTerkonfirmasi()
    {
        $this->db->query("SELECT * FROM tb_user WHERE tb_user.id_role = '3'");
        return $this->db->resultSet();
    }
}
