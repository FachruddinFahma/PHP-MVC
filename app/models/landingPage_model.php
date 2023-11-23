<?php
class landingPage_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKost()
    {
        $this->db->query('SELECT * FROM tb_kost');
        return $this->db->resultSet();
    }

    // public function getAllFotoKost()
    // {
    //     $this->db->query('SELECT * FROM tb_foto_kost');
    //     return $this->db->resultSet();
    // }
}
