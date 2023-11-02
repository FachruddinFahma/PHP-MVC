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
    }
?>