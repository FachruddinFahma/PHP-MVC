<?php
    class pemesananKost_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        function generateRandomID() {
            // Tambahkan 7 angka random
            $randomNumbers = str_pad(rand(0, 9999999), 7, '0', STR_PAD_LEFT);
            $pemesananID = "IDP" . $randomNumbers;
            return $pemesananID;
        }        

        public function getAll($id_kamar)
        {
            $this->db->query("SELECT tb_kost.id_kost, tb_kamar.id_kamar, tb_kost.nama_kost, tb_kost.alamat, tb_kamar.nama_kamar, tb_kamar.fasilitas, tb_kamar.harga_bulanan, tb_kamar.harga_harian, tb_kamar.harga_3bulanan, tb_kamar.harga_tahunan
                            FROM tb_kamar 
                            JOIN tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
                            WHERE tb_kamar.id_kamar = :id_kamar");
            $this->db->bind(':id_kamar', $id_kamar);

            return $this->db->single();
        }

        public function getPenggunaById($id)
        {
            $query = "SELECT * FROM tb_user WHERE id_user = :id";
            $this->db->query($query);
            $this->db->bind(':id', $id);

            return $this->db->single();
        }

        public function getDetailKamarById($id_kamar)
        {
            $query = "SELECT harga_bulanan, harga_harian, harga_3bulanan, harga_tahunan FROM tb_kamar WHERE id_kamar = :id_kamar";
            $this->db->query($query);
            $this->db->bind(':id_kamar', $id_kamar);

            return $this->db->single();
        }

        public function addPemesanan($pemesanan)
        {
            $id_user = $_SESSION['id_user'];
            //$id_pemesanan = $this->generateRandomID();

            $query = "INSERT INTO tb_pemesanan (id_pemesanan, id_kamar, id_user, tggl_pemesaan, tggl_masuk, tggl_keluar, kategori, harga, metode_pembayaran, status) 
                    VALUES (:id_pemesanan, :id_kamar, :id_user, CURRENT_TIMESTAMP, :tggl_masuk, :tggl_keluar, :kategori, :harga, :metode_pembayaran, 'PROSES')";

            $this->db->query($query);
            $this->db->bind(':id_pemesanan', $pemesanan['id_pemesanan']);
            $this->db->bind(':id_kamar', $pemesanan['id_kamar']);
            $this->db->bind(':id_user', $id_user);
            $this->db->bind(':tggl_masuk', $pemesanan['tggl_masuk']);
            $this->db->bind(':tggl_keluar', $pemesanan['tggl_keluar']);
            $this->db->bind(':kategori', $pemesanan['kategori']);
            $this->db->bind(':harga', $pemesanan['harga']);
            $this->db->bind(':metode_pembayaran', $pemesanan['metode_pembayaran']);
            $this->db->execute();
        }
    }
?>