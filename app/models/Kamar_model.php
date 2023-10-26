<?php
class Kamar_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKamar()
    {
        $this->db->query('SELECT * FROM tb_kamar');
        return $this->db->resultSet();
    }

    public function getPenghuniById($id_Penghuni)
    {
        $this->db->query('SELECT * FROM tb_penghuni WHERE id_Penghuni = :id');
        $this->db->bind('id', $id_Penghuni);
        return $this->db->single();
    }
    public function addKamar($data)
    {
        $query = "INSERT INTO tb_user(`id_user`, `nama_lengkap`, `email`, `password`, `tggl_lahir`, 'jenis_kelamin', 'alamat', 'no_hp', 'foto_user', 'id_role') VALUES (':id_user', :nama_lengkap, :email, :pass, :tggl_lahir, :jenis_kelamin, :alamat, :no_hp, :foto_user, :id_role:)";
        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['pass']);
        $this->db->bind('tggl_lahir', $data['tggl_lahir']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('foto_user', $data['foto_user']);
        $this->db->bind('id_role', $data['id_role']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
