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
            $id_user = $_SESSION['id_user'];
            $fotoQris = $_FILES['foto_qris']['tmp_name'];
            $uploadDir = '../public/qris/'; 
            $fotoQrisName = basename($_FILES['foto_qris']['name']);
            move_uploaded_file($fotoQris, $uploadDir . $fotoQrisName);

            // Mendapatkan nama file sementara
            $foto1 = $_FILES['fotokost1']['tmp_name'];
            $foto2 = $_FILES['fotokost2']['tmp_name'];
            $foto3 = $_FILES['fotokost3']['tmp_name'];
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
            $query = "INSERT INTO tb_kost VALUES ('', '$id_user', :nama_kost, :jenis_kost, :fasilitas_kost, :peraturan_kost, :latitude, :longitude, :alamat,
            :jenis_bank, :no_rekening, :nama_rekening, :foto_qris, 'BELUM AKTIF')";
            $this->db->query($query);
            $this->db->bind('nama_kost', $kost['nama_kost']);
            $this->db->bind('jenis_kost', $kost['jenis_kost']);
            $this->db->bind('fasilitas_kost', $kost['fasilitas_kost']);
            $this->db->bind('peraturan_kost', $kost['peraturan_kost']);
            $this->db->bind('latitude', $kost['latitude']);
            $this->db->bind('longitude', $kost['longitude']);
            $this->db->bind('alamat', $kost['alamat']);
            $this->db->bind('jenis_bank', $kost['jenis_bank']);
            $this->db->bind('no_rekening', $kost['no_rekening']);
            $this->db->bind('nama_rekening', $kost['nama_rekening']);
            $this->db->bind('foto_qris', $fotoQrisName);
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