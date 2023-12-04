<?php
    class Dashboard_model
    {
        private $db;
    
        public function __construct()
        {
            $this->db = new Database;
        }
    
        public function totalKomplain()
        {
            $query = "SELECT COUNT(*) AS total_komplain FROM tb_komplain";
            $this->db->query($query);
            return $this->db->single()['total_komplain'];
        }

        public function totalPenghuniByIdUser($id_user)
        {
            $query = "SELECT COUNT(*) AS total_penghuni FROM tb_user WHERE id_role = '3' AND id_user = :id_user";
            $this->db->query($query);
            $this->db->bind(':id_user', $id_user);
            return $this->db->single()['total_penghuni'];
        }

        public function totalKamarForUser($idUser)
        {
            $query = "SELECT COUNT(*) AS total_kamar 
                    FROM tb_kamar
                    JOIN tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
                    WHERE tb_kost.id_user = :id_user";

            $this->db->query($query);
            $this->db->bind(':id_user', $idUser);
            
            return $this->db->single()['total_kamar'];
        }
    }
?>