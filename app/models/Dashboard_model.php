<?php
    class Dashboard_model
    {
        private $db;
    
        public function __construct()
        {
            $this->db = new Database;
        }
    
        public function totalKomplainByUserId($id_user)
        {
            $query = "SELECT COUNT(*) AS total_komplain
                    FROM tb_komplain
                    INNER JOIN tb_kost ON tb_kost.id_kost = tb_komplain.id_kamar
                    WHERE tb_kost.id_user = :id_user";

            $this->db->query($query);
            $this->db->bind(':id_user', $id_user);

            return $this->db->single()['total_komplain'];
        }

        public function totalPenghuniByIdUser($id_user)
        {
            $query = "SELECT COUNT(DISTINCT tb_penghuni_kamar.id_user) AS total_penghuni
            FROM tb_penghuni_kamar
            INNER JOIN tb_kamar ON tb_penghuni_kamar.id_kamar = tb_kamar.id_kamar
            INNER JOIN tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
            WHERE tb_kost.id_user = :id_user";
            $this->db->query($query);
            $this->db->bind(':id_user', $id_user);
            return $this->db->single()['total_penghuni'];
        }

        public function totalKamarByIdUser($idUser)
        {
            $query = "SELECT COUNT(*) AS total_kamar 
                    FROM tb_kamar
                    JOIN tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
                    WHERE tb_kost.id_user = :id_user";

            $this->db->query($query);
            $this->db->bind(':id_user', $idUser);
            
            return $this->db->single()['total_kamar'];
        }

        public function totalPendapatanByIdUser($idUser)
        {
            $query = "SELECT SUM(tb_transaksi.bayar) AS total_harga
                    FROM tb_transaksi
                    JOIN tb_pemesanan ON tb_transaksi.id_pemesanan = tb_pemesanan.id_pemesanan
                    JOIN tb_user ON tb_pemesanan.id_user = tb_user.id_user
                    JOIN tb_kamar ON tb_pemesanan.id_kamar = tb_kamar.id_kamar
                    JOIN tb_kost ON tb_kost.id_kost = tb_kamar.id_kost
                    WHERE tb_kost.id_user = :id_user";

            $this->db->query($query);
            $this->db->bind(':id_user', $idUser);

            return $this->db->single();
        }

        public function getAllPenghuni($id_user)
        {
            $this->db->query("SELECT tb_user.foto_user, tb_user.id_user, nama_lengkap, tb_kamar.id_kamar, tb_user.no_hp 
            FROM tb_penghuni_kamar 
            JOIN tb_user ON tb_user.id_user = tb_penghuni_kamar.id_user 
            JOIN tb_kamar ON tb_kamar.id_kamar = tb_penghuni_kamar.id_kamar 
            JOIN tb_kost ON tb_kost.id_kost = tb_kamar.id_kost
            WHERE tb_user.id_role = '3' AND tb_kost.id_user = :id_user");
            
            $this->db->bind(':id_user', $id_user);
            return $this->db->resultSet();
        }

        public function getAllTrank($id_user)
        {
            $this->db->query("SELECT tb_user.nama_lengkap, tb_transaksi.tggl_transaksi,tb_kamar.nama_kamar,tb_pemesanan.harga
            FROM tb_pemesanan 
            JOIN tb_transaksi ON tb_transaksi.id_pemesanan = tb_pemesanan.id_pemesanan
            JOIN tb_user ON tb_pemesanan.id_user = tb_user.id_user
            JOIN  tb_kamar ON tb_pemesanan.id_kamar = tb_kamar.id_kamar
            JOIN tb_kost ON tb_kost.id_kost = tb_kamar.id_kost
            WHERE tb_kost.id_user = :id_user");

            $this->db->bind(':id_user', $id_user);
            return $this->db->resultSet();
        }
    }
?>