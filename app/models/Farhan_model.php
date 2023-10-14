<?php
    class Farhan_model {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }


        public function getAllFarhan() 
        {
            $this->db->query('SELECT * FROM tb_penghuni ');
            return $this->db->resultSet();
        }
    }
?>