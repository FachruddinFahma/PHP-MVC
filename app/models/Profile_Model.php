<?php
class profile_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProfile($id)
    {
        $this->db->query("SELECT * FROM tb_user WHERE id_user = :id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function updateUser($id_user, $nama_lengkap, $email, $password, $tggl_lahir, $jenis_kelamin, $alamat, $no_hp)
{
    $this->db->query("UPDATE tb_user SET nama_lengkap = :nama_lengkap, email = :email, password = :password, tggl_lahir = :tggl_lahir, jenis_kelamin = :jenis_kelamin, alamat = :alamat, no_hp = :no_hp WHERE id_user = :id_user");
    $this->db->bind(':id_user', $id_user);
    $this->db->bind(':nama_lengkap', $nama_lengkap);
    $this->db->bind(':email', $email);
    $this->db->bind(':password', $password);
    $this->db->bind(':tggl_lahir', $tggl_lahir);
    $this->db->bind(':jenis_kelamin', $jenis_kelamin);
    $this->db->bind(':alamat', $alamat);
    $this->db->bind(':no_hp', $no_hp);
    return $this->db->execute();
}

}
