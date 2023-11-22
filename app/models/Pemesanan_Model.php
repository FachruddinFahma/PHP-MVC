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
        $this->db->query("SELECT * FROM tb_pemesanan WHERE status = 'masuk'");
        return $this->db->resultSet();
    }

    public function getPemesananTerkonfirmasi()
    {
        $this->db->query("SELECT * FROM tb_pemesanan WHERE status = 'terkonfirmasi'");
        return $this->db->resultSet();
    }
}
