<?php
class EditDataApi_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function updateUser($nama, $noHp, $alamat, $jk, $tglLahir, $idUser)
    {
        $query = "UPDATE tb_user SET nama_lengkap = :nama, no_hp = :noHp, alamat = :alamat, jenis_kelamin = :jk, tggl_lahir = :tglLahir 
        WHERE id_user = :idUser";
        
        $this->db->query($query);
        $this->db->bind(':nama', $nama);
        $this->db->bind(':noHp', $noHp);
        $this->db->bind(':alamat', $alamat);
        $this->db->bind(':jk', $jk);
        $this->db->bind(':tglLahir', $tglLahir);
        $this->db->bind(':idUser', $idUser);

        return $this->db->execute(); 
    }
}
