<?php
class Download_model extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function addTesti($testi)
    {
        $query = "INSERT INTO tb_testimoni (id_user, deskripsi_testi) VALUES (:id_user, :deskripsi_testi)";
        $this->db->query($query);
        $this->db->bind(':id_user', $testi['id_user']);
        $this->db->bind(':deskripsi_testi', $testi['deskripsi_testi']);
        $this->db->execute();
    }


}