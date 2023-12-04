<?php
    class Komplain_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllKomplainByIdUser($id_user)
        {
            $this->db->query("SELECT tb_komplain.id_komplain, tb_user.nama_lengkap, tb_kamar.nama_kamar, tb_komplain.jenis_komplain, tb_komplain.tipe_komplain, tb_komplain.deskripsi_komplain, tb_komplain.tggl_komplain 
            FROM tb_komplain
            JOIN tb_user ON tb_user.id_user = tb_komplain.id_user 
            JOIN tb_kamar ON tb_kamar.id_kamar = tb_komplain.id_kamar
            JOIN tb_kost ON tb_kost.id_kost = tb_kamar.id_kost
            WHERE tb_user.id_role = '3' AND tb_kost.id_user = :id_user");

            $this->db->bind(':id_user', $id_user);
            return $this->db->resultSet();
        }
    }
?>