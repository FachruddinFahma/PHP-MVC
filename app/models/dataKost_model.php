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
            $this->db->query('SELECT * FROM tb_kost WHERE id_kost = :id_kost');
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
            $this->db->query('UPDATE tb_kost SET nama_kost = :nama_kost, jenis_kost = :jenis_kost, fasilitas = :faslitas_kost,  
            peraturan_kost = :peraturan_kost, latitude = :latitude, longitude = :longitude, alamat = :alamat WHERE id_kost = :id_kost');
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