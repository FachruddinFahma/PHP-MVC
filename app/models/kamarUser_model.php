<?php
class kamarUser_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // models
    public function getAllKost($id_kost)
    {
        $this->db->query("SELECT * FROM tb_kost WHERE id_kost = :id_kost");
        $this->db->bind(':id_kost', $id_kost);
        return $this->db->single();
    }

    public function getAllFotoKost($id)
    {
        $this->db->query("SELECT * FROM tb_foto_kost WHERE id_kost = :id");
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        // Pastikan kolom "link_fotoKost" ada dalam hasil query
        if (!isset($result['link_fotoKost'])) {
            $result['link_fotoKost'] = '';
        }
        // Memecah string dengan delimiter ","
        $result['foto_kamar'] = explode(',', $result['link_fotoKost']);

        return $result;
    }

    public function getAllFotoKamar($id_kamar)
    {
        $this->db->query("SELECT * FROM tb_foto_kamar WHERE id_kamar = :id_kamar");
        $this->db->bind(':id_kamar', $id_kamar);
        $result = $this->db->single();

        if (!isset($result['link_fotoKamar'])) {
            $result['link_fotoKamar'] = '';
        }

        $result['foto_kamar'] = explode(',', $result['link_fotoKamar']);

        return $result;
    }

    public function getAllKamar($id_kost)
{
    $this->db->query("SELECT * FROM tb_kamar WHERE id_kost = :id_kost");
    $this->db->bind(':id_kost', $id_kost);
    $result = $this->db->resultSet();

    foreach ($result as &$kamar) {
        $foto_kamar = $this->getAllFotoKamar($kamar['id_kamar']);
        $kamar['main_foto'] = $foto_kamar['foto_kamar'][0] ?? ''; 
    }

    return $result;
}

}