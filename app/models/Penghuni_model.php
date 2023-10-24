<?php
    class Penghuni_model {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }


        public function getAllPenghuni() 
        {
            $this->db->query('SELECT * FROM tb_user left JOIN tb_kamar ON tb_user.id_user = tb_kamar.id_user');
            return $this->db->resultSet();
        }

        public function addPenghuni($data)
        {
            $query="INSERT INTO tb_penghuni VALUES ('', :nama_penghuni, :alamat, :jenis_kelamin, :agama, :foto)";
            $this->db->query($query);
            $this->db->bind('nama_penghuni', $data['nama_penghuni']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('jenis_kelamin', $data['rdJK']);
            $this->db->bind('agama', $data['agama']);
            $this->db->bind('foto', $data['foto']);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function deletePenghuni($id_Penghuni)
        {
            $query = "DELETE FROM tb_penghuni WHERE id_Penghuni = :id";
            $this->db->query($query);
            $this->db->bind(':id', $id_Penghuni);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getPenghuniById($id_Penghuni)
        {
            $this->db->query('SELECT * FROM tb_penghuni WHERE id_Penghuni = :id');
            $this->db->bind('id', $id_Penghuni);
            return $this->db->single();
        }
        
        public function updatePenghuni($id_Penghuni, $nama_penghuni, $alamat)
        {
            $this->db->query('UPDATE tb_penghuni SET nama_penghuni = :nama_penghuni, alamat = :alamat WHERE id_Penghuni = :id');
            $this->db->bind(':id', $id_Penghuni);
            $this->db->bind(':nama_penghuni', $nama_penghuni);
            $this->db->bind(':alamat', $alamat);
            return $this->db->execute();
        }
    }
?>