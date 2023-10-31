<?php
    class PendaftaranKost_model {
        private $db;
    
        public function __construct()
        {
            $this->db = new Database;
        }
    
        public function addKost($kost)
        {
            // Mendapatkan data gambar dari input file
            $foto1 = file_get_contents($_FILES['fotokost1']['tmp_name']);
            $foto2 = file_get_contents($_FILES['fotokost2']['tmp_name']);
            $foto3 = file_get_contents($_FILES['fotokost3']['tmp_name']);

            // Query untuk memasukkan data ke tb_kost dan tb_foto_kost
            $query = "INSERT INTO tb_kost VALUES ('KOST02', 'PGHOO3', :nama_kost, :jenis_kost, :fasilitas_kost, :peraturan_kost, :latitude, :longitude, :alamat)";
            $query .= "INSERT INTO tb_foto_kost VALUES ('KOST02', :link_fotoKost), ('KOST02', :link_fotoKost), ('KOST02', :link_fotoKost)";

            // Eksekusi query
            $this->db->query($query);
            $this->db->bind('nama_kost', $kost['nama_kost']);
            $this->db->bind('jenis_kost', $kost['jenis_kost']);
            $this->db->bind('fasilitas_kost', $kost['fasilitas_kost']);
            $this->db->bind('peraturan_kost', $kost['peraturan_kost']);
            $this->db->bind('latitude', $kost['latitude']);
            $this->db->bind('longitude', $kost['longitude']);
            $this->db->bind('alamat', $kost['alamat']);
            $this->db->bind('link_fotoKost', $foto1['fotoKost1']);
            $this->db->bind('link_fotoKost', $foto2['fotoKost2']);
            $this->db->bind('link_fotoKost', $foto3['fotoKost3']);
            return $this->db->execute();
            return $this->db->rowCount();
        }
    }    
?>