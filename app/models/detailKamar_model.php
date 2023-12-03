<?php
    class detailKamar_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getKamarbyIdKamar($id_kamar)
        {
            $this->db->query("SELECT tb_kost.alamat, tb_kamar.id_kamar, tb_kamar.nama_kamar, tb_kost.id_user, tb_kamar.fasilitas, tb_kamar.ukuran, tb_kost.fasilitas_kost, tb_kost.peraturan_kost, tb_kamar.harga_harian, tb_kamar.harga_bulanan, 
            tb_kamar.harga_3bulanan, tb_kamar.harga_tahunan, tb_kost.latitude, tb_kost.longitude
                FROM tb_kamar
                JOIN tb_kost ON tb_kamar.id_kost  = tb_kost.id_kost
                WHERE tb_kamar.id_kamar = '$id_kamar'");
            return $this->db->single();
        }

        public function getAllFotoKamar($id)
        {
            $this->db->query("SELECT * FROM tb_foto_kamar WHERE id_kamar = :id");
            $this->db->bind(':id', $id);
            $result = $this->db->single();

            if (!isset($result['link_fotoKamar'])) {
                $result['link_fotoKamar'] = '';
            }

            $result['foto_kamar'] = explode(',', $result['link_fotoKamar']);

            return $result;
        }

        // public function getPenggunaById($id)
        // {
        //     $query = "SELECT * FROM tb_user WHERE id_user = :id";
        //     $this->db->query($query);
        //     $this->db->bind(':id', $id);

        //     return $this->db->single();
        // }
    }
?>