<?php
class InsertDataApi_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        date_default_timezone_set('Asia/Jakarta');
    }

    public function addKomplain($id_komplain, $id_user, $jenis_komplain, $tipe_komplain, $deskripsi_komplain, $tggl_komplain){
        
        if(empty($tggl_komplain)) {
            $tggl_komplain = date('Y-m-d H:i:s'); 
        }

        $this->db->query('INSERT INTO tb_komplain (id_komplain, id_user, jenis_komplain, tipe_komplain, deskripsi_komplain, tggl_komplain) VALUES (:id_komplain, :id_user, :jenis_komplain, :tipe_komplain, :deskripsi_komplain, :tggl_komplain)');
        $this->db->bind(':id_komplain', $id_komplain);
        $this->db->bind(':id_user', $id_user);
        $this->db->bind(':jenis_komplain', $jenis_komplain);
        $this->db->bind(':tipe_komplain', $tipe_komplain);
        $this->db->bind(':deskripsi_komplain', $deskripsi_komplain);
        $this->db->bind(':tggl_komplain', $tggl_komplain);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

