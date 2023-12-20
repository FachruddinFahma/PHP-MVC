<?php
class landingPage_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getRecentTesti($limit)
    {
        $this->db->query('SELECT tb_user.nama_lengkap, tb_user.foto_user, tb_testimoni.deskripsi_testi, tb_testimoni.tggl_testi FROM tb_testimoni 
        JOIN tb_user ON tb_user.id_user = tb_testimoni.id_user ORDER BY tggl_testi DESC LIMIT :limit');
        $this->db->bind(':limit', $limit, PDO::PARAM_INT);
        return $this->db->resultSet();
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