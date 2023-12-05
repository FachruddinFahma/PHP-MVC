<?php
    class testimoniAdmin_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }
        public function getDataTestimoni()
        {
            $this->db->query("SELECT tb_user.nama_lengkap, tb_testimoni.deskripsi_testi FROM `tb_testimoni` JOIN tb_user ON tb_user.id_user = tb_testimoni.id_user");
            return $this->db->resultSet();
        }
        public function getUserById($id_user)
        {
            $this->db->query("SELECT * FROM tb_user WHERE id_user = :id");
            $this->db->bind('id', $id_user);
            return $this->db->resultSet();
        }
    }
?>