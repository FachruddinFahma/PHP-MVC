<?php
    class debby_model {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }


        public function getAllPenghuni() 
        {
            $this->db->query('SELECT * FROM tb_penghuni ');
            return $this->db->resultSet();
        }
    }