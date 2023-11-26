<?php
    class dataKost_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getKostByUserId($id_user)
        {
            $this->db->query('SELECT tb_kost.id_kost, tb_kost.nama_kost, tb_user.nama_lengkap, tb_kost.fasilitas_kost, tb_kost.peraturan_kost, tb_kost.jenis_kost, tb_kost.jenis_bank, tb_kost.no_rekening,
            tb_kost.nama_rekening, tb_kost.foto_qris, tb_kost.alamat, tb_kost.latitude, tb_kost.longitude, tb_kost.status
            FROM tb_kost 
            JOIN tb_user ON tb_user.id_user = tb_kost.id_user
            WHERE tb_user.id_user = :id_user AND tb_kost.status = "AKTIF" ');

            $this->db->bind(':id_user', $id_user);
            return $this->db->single();
        }

        public function getfotoKostByUserId($id_user)
        {
            $this->db->query('SELECT tb_kost.id_kost, tb_foto_kost.link_fotoKost as link_fotoKost
            FROM tb_kost
            JOIN tb_foto_kost ON tb_foto_kost.id_kost = tb_kost.id_kost
            WHERE tb_kost.id_user = :id_user');
            $this->db->bind(':id_user', $id_user);
            return $this->db->single();
        }

        public function updateKost($id_kost, $nama_kost, $jenis_kost, $fasilitas_kost, $peraturan_kost, $latitude, $longitude, $alamat, $jenis_bank, $no_rekening, $nama_rekening, $foto_qris)
        {
            $this->db->query("UPDATE tb_kost SET 
            nama_kost = :nama_kost, 
            jenis_kost = :jenis_kost, 
            fasilitas_kost = :fasilitas_kost, 
            peraturan_kost = :peraturan_kost, 
            latitude = :latitude, 
            longitude = :longitude, 
            alamat = :alamat, 
            jenis_bank = :jenis_bank, 
            no_rekening = :no_rekening, 
            nama_rekening = :nama_rekening, 
            foto_qris = :foto_qris 
            WHERE id_kost = :id_kost");
            
            $this->db->bind(':id_kost', $id_kost);
            $this->db->bind(':nama_kost', $nama_kost);
            $this->db->bind(':jenis_kost', $jenis_kost);
            $this->db->bind(':fasilitas_kost', $fasilitas_kost);
            $this->db->bind(':peraturan_kost', $peraturan_kost);
            $this->db->bind(':latitude', $latitude);
            $this->db->bind(':longitude', $longitude);
            $this->db->bind(':alamat', $alamat);
            $this->db->bind(':jenis_bank', $jenis_bank);
            $this->db->bind(':no_rekening', $no_rekening);
            $this->db->bind(':nama_rekening', $nama_rekening);
            $this->db->bind(':foto_qris', $foto_qris);
            return $this->db->execute();
        }
    }
?>


<?php
// public function getKostById($id_kost)
        // {
        //     $this->db->query('SELECT tb_kost.id_kost, tb_kost.nama_kost, tb_user.nama_lengkap, tb_kost.fasilitas_kost, tb_kost.peraturan_kost, tb_kost.jenis_kost, 
        //     tb_kost.alamat, tb_kost.latitude, tb_kost.longitude, tb_kost.status
        //     FROM tb_kost 
        //     JOIN tb_user ON tb_user.id_user = tb_kost.id_user
        //     WHERE id_kost = :id_kost && status = "AKTIF" ');
        //     $this->db->bind('id_kost', $id_kost);
        //     return $this->db->single();

            
        // }
?>