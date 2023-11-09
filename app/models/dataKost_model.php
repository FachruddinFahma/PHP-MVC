<?php
    class dataKost_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getKostById($id_kost)
        {
            $this->db->query('SELECT tb_kost.id_kost, tb_kost.nama_kost, tb_user.nama_lengkap, tb_kost.fasilitas_kost, tb_kost.peraturan_kost, tb_kost.jenis_kost, 
            tb_kost.alamat, tb_kost.latitude, tb_kost.longitude, tb_kost.status
            FROM tb_kost 
            JOIN tb_user ON tb_user.id_user = tb_kost.id_user
            WHERE id_kost = :id_kost && status = "AKTIF" ');
            $this->db->bind('id_kost', $id_kost);
            return $this->db->single();

            
        }

        public function getfotKostById($id_kost)
        {
            $this->db->query('SELECT * FROM tb_foto_kost WHERE id_kost = :id_kost');
            $this->db->bind('id_kost', $id_kost);
            return $this->db->single();
        }

        public function updateKost($id_kost, $nama_kost, $jenis_kost, $fasilitas_kost, $peraturan_kost, $latitude, $longitude, $alamat)
        {
            $this->db->query ("UPDATE tb_kost SET nama_kost = :nama_kost, jenis_kost = :jenis_kost, fasilitas_kost = :fasilitas_kost, peraturan_kost = :peraturan_kost, 
            latitude = :latitude, longitude = :longitude, alamat = :alamat WHERE id_kost = :id_kost");
            $this->db->bind(':id_kost', $id_kost);
            $this->db->bind(':nama_kost', $nama_kost);
            $this->db->bind(':jenis_kost', $jenis_kost);
            $this->db->bind(':fasilitas_kost', $fasilitas_kost);
            $this->db->bind(':peraturan_kost', $peraturan_kost);
            $this->db->bind(':latitude', $latitude);
            $this->db->bind(':longitude', $longitude);
            $this->db->bind(':alamat', $alamat);
            return $this->db->execute();
        }
    }
?>