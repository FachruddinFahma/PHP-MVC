<?php
class jelajahKost_model
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

    public function getAllFotoKostt($id)
    {
        $this->db->query("SELECT * FROM tb_foto_kost WHERE id_kost = :id");
        $this->db->bind(':id', $id);
        $result = $this->db->single();

        if (!isset($result['link_fotoKost'])) {
            $result['link_fotoKost'] = '';
        }

        $result['foto_kamar'] = explode(',', $result['link_fotoKost']);

        return $result;
    }
}
