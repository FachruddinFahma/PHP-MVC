<?php
    class pemesananKost_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAll($id_kamar)
        {
            $this->db->query("SELECT tb_kost.id_kost, tb_kost.nama_kost, tb_kost.alamat, tb_kamar.nama_kamar, tb_kamar.fasilitas
                            FROM tb_kamar 
                            JOIN tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
                            WHERE tb_kamar.id_kamar = ':id_kamar'");
                            return $this->db->single();
        }

        public function getPenggunaById($id)
        {
            $query = "SELECT nama_lengkap, jenis_kelamin, alamat, no_hp FROM tb_user WHERE id_user = :id";
            $this->db->query($query);
            $this->db->bind(':id', $id);

            return $this->db->single();
        }

        public function getDetailKamarById()
        {
            $query = "SELECT harga_bulanan, harga_harian, harga_3bulanan, harga_tahunan FROM tb_kamar WHERE id_kamar = 'KMR004'";
            $this->db->query($query);
            return $this->db->single();
        }
    }
?>