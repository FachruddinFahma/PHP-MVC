<?php
    class kamarUser_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getFotoKost()
        {
            $this->db->query("SELECT * FROM tb_foto_kost");
            return $this->db->single();
        }
    }
?>