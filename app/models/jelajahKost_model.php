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

    public function getKostBySearchByKecamatan($kost)
    {
        $this->db->query('SELECT * FROM tb_kost WHERE kecamatan = :kecamatan');
        $this->db->bind(':kecamatan', $kost['lokasi-kost']);
        return $this->db->resultSet();
    }

    public function getKostBySearchByKategori($kost)
    {
        $selectedCategory = $kost['kategori-kost'];
        $hargaAwal = $kost['harga-awal'];
        $hargaAkhir = $kost['harga-akhir'];

        switch ($selectedCategory) {
            case 'harian':
                $query = "SELECT * FROM tb_kost 
                        JOIN tb_kamar ON tb_kost.id_kost = tb_kamar.id_kost 
                        WHERE tb_kost.kecamatan = :kecamatan 
                        AND tb_kamar.harga_harian IS NOT NULL
                        AND tb_kamar.harga_harian BETWEEN :harga_awal AND :harga_akhir";
                break;
            case 'bulanan':
                $query = "SELECT * FROM tb_kost 
                        JOIN tb_kamar ON tb_kost.id_kost = tb_kamar.id_kost 
                        WHERE tb_kost.kecamatan = :kecamatan 
                        AND tb_kamar.harga_bulanan IS NOT NULL
                        AND tb_kamar.harga_bulanan BETWEEN :harga_awal AND :harga_akhir";
                break;
            case '3bulanan':
                $query = "SELECT * FROM tb_kost 
                        JOIN tb_kamar ON tb_kost.id_kost = tb_kamar.id_kost 
                        WHERE tb_kost.kecamatan = :kecamatan 
                        AND tb_kamar.harga_3bulanan IS NOT NULL
                        AND tb_kamar.harga_3bulanan BETWEEN :harga_awal AND :harga_akhir";
                break;
            case '6bulanan':
                $query = "SELECT * FROM tb_kost 
                        JOIN tb_kamar ON tb_kost.id_kost = tb_kamar.id_kost 
                        WHERE tb_kost.kecamatan = :kecamatan 
                        AND tb_kamar.harga_6bulanan IS NOT NULL
                        AND tb_kamar.harga_6bulanan BETWEEN :harga_awal AND :harga_akhir";
                break;
            case 'tahunan':
                $query = "SELECT * FROM tb_kost 
                        JOIN tb_kamar ON tb_kost.id_kost = tb_kamar.id_kost 
                        WHERE tb_kost.kecamatan = :kecamatan 
                        AND tb_kamar.harga_tahunan IS NOT NULL
                        AND tb_kamar.harga_tahunan BETWEEN :harga_awal AND :harga_akhir";
                break;
            default:
                // Handle default case or set $query to a default value
                break;
        }

        $this->db->query($query);
        $this->db->bind(':kecamatan', $kost['lokasi-kost']);
        $this->db->bind(':harga_awal', $hargaAwal);
        $this->db->bind(':harga_akhir', $hargaAkhir);
        
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