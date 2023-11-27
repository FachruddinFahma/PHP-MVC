<?php
    class pemesananKost_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAll()
        {
            $this->db->query("SELECT tb_kost.id_kost, tb_kost.nama_kost, tb_kost.alamat, tb_kamar.nama_kamar, tb_kamar.fasilitas
                            FROM tb_kamar 
                            JOIN tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
                            WHERE tb_kamar.id_kamar = 'KMR004'");
                            return $this->db->single();
        }
    }
?>