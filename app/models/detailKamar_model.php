<?php
    class dataKost_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getKamarbyIdKost()
        {
            $this->db->query('SELECT * FROM tb_kamar');
            return $this->db->resultSet();
        }
    }
?>