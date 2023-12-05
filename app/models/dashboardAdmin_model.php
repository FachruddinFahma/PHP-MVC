<?php
    class DashboardAdmin_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function totalTestimoni()
        {
            $query = "SELECT COUNT(*) AS total_testimoni FROM tb_testimoni";
            $this->db->query($query);
            return $this->db->single()['total_testimoni'];
        }

        public function totalPemilikKost()
        {
            $query = "SELECT COUNT(*) AS total_pemilik FROM tb_user WHERE id_role = 2";
            $this->db->query($query);
            return $this->db->single()['total_pemilik'];
        }

        public function totalPenyewakKost()
        {
            $query = "SELECT COUNT(*) AS total_penyewa FROM tb_penghuni_kamar 
            JOIN tb_user ON tb_user.id_user = tb_penghuni_kamar.id_user
            WHERE id_role = 3";
            $this->db->query($query);
            return $this->db->single()['total_penyewa'];
        }

        public function totalKost()
        {
            $query = "SELECT COUNT(*) AS total_kost
                    FROM tb_kost
                    WHERE status = 'AKTIF'";
            $this->db->query($query);
            return $this->db->single()['total_kost'];
        }

        public function getAllPengguna()
        {
            $query = "SELECT * FROM `tb_user` WHERE id_role = 2 OR id_role = 3 LIMIT 5";
            $this->db->query($query);
            return $this->db->resultSet();
        }

        public function getAllKost()
        {
            $this->db->query("SELECT tb_kost.nama_kost, COUNT(tb_kamar.id_kamar) as jumlah_kamar, tb_user.nama_lengkap, tb_user.no_hp, tb_user.alamat
            FROM tb_kost
            JOIN tb_user ON tb_user.id_user = tb_kost.id_user
            JOIN tb_kamar ON tb_kamar.id_kost = tb_kost.id_kost
            WHERE tb_kost.status = 'AKTIF'
            GROUP BY tb_kost.nama_kost, tb_user.nama_lengkap, tb_kost.id_kost, tb_kost.status LIMIT 3");
            return $this->db->resultSet();
        }
    }
?>
