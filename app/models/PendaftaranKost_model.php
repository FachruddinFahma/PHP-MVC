<?php
    class PendaftaranKost_model {
        private $db;
        private $db2;
    
        public function __construct()
        {
            $this->db = new Database;
            $this->db2 = new Database;
        }
    
        public function addKost($kost)
        {
            // Mendapatkan nama file sementara
            $foto1 = $_FILES['fotokost1']['tmp_name'];
            $foto2 = $_FILES['fotokost2']['tmp_name'];
            $foto3 = $_FILES['fotokost3']['tmp_name'];

            // Menentukan lokasi penyimpanan file
            $uploadDir = '../public/foto/'; // Ganti dengan lokasi penyimpanan yang sesuai di server Anda

            // Mendapatkan nama file asli
            $fotoName1 = basename($_FILES['fotokost1']['name']);
            $fotoName2 = basename($_FILES['fotokost2']['name']);
            $fotoName3 = basename($_FILES['fotokost3']['name']);

            // Memindahkan file ke lokasi penyimpanan
            move_uploaded_file($foto1, $uploadDir . $fotoName1);
            move_uploaded_file($foto2, $uploadDir . $fotoName2);
            move_uploaded_file($foto3, $uploadDir . $fotoName3);
            
            // Query untuk memasukkan data ke tb_kost
            $query = "INSERT INTO tb_kost VALUES ('', 'USER004', :nama_kost, :jenis_kost, :fasilitas_kost, :peraturan_kost, :latitude, :longitude, :alamat , 'BELUM AKTIF')";
            $this->db->query($query);
            $this->db->bind('nama_kost', $kost['nama_kost']);
            $this->db->bind('jenis_kost', $kost['jenis_kost']);
            $this->db->bind('fasilitas_kost', $kost['fasilitas_kost']);
            $this->db->bind('peraturan_kost', $kost['peraturan_kost']);
            $this->db->bind('latitude', $kost['latitude']);
            $this->db->bind('longitude', $kost['longitude']);
            $this->db->bind('alamat', $kost['alamat']);
            $this->db->execute();

            // Menggabungkan nama file gambar dengan tanda pemisah koma (,)
            $combinedFilenames = $fotoName1 . ',' . $fotoName2 . ',' . $fotoName3;
            $queryFoto = "INSERT INTO tb_foto_kost VALUES ('', :link_foto)";
            $this->db->query($queryFoto);
            $this->db->bind('link_foto', $combinedFilenames);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }    
?>