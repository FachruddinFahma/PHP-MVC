<?php
class EditUser_model_api
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function updateUser($nama, $notelp, $jk, $tglLahir, $email, $alamat, $foto)
    {
        

        return $this->db->execute(); // Return true if update is successful
    }
}

