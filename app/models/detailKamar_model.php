<?php
    class detailKamar_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getKamarbyIdKamar()
        {
            $this->db->query("SELECT tb_kost.alamat, tb_kost.id_user, tb_kamar.fasilitas, tb_kamar.ukuran, tb_kost.peraturan_kost, tb_kamar.harga_harian, tb_kamar.harga_bulanan, 
            tb_kamar.harga_3bulanan, tb_kamar.harga_tahunan, tb_kost.latitude, tb_kost.longitude
                FROM tb_kamar
                JOIN tb_kost ON tb_kamar.id_kost  = tb_kost.id_kost
                WHERE tb_kamar.id_kamar = 'KMR004'");
            return $this->db->single();
        }
    }
?>