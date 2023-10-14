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
}
