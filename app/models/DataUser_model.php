<?php

class DataUser_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataPemilik()
    {
        $this->db->query("SELECT * FROM tb_user JOIN tb_kost ON tb_user.id_user = tb_kost.id_user WHERE tb_user.id_role  = '2'");
        return $this->db->resultSet();
    }
    public function getUserById($id_user)
    {
        $this->db->query("SELECT * FROM tb_user WHERE id_user = :id");
        $this->db->bind('id', $id_user);
        return $this->db->resultSet();
    }
    public function getAllPemilikByUserId($id_user)
    {
        $this->db->query("SELECT
        tb_user.id_user,
        tb_user.nama_lengkap,
        tb_kost.nama_kost,
        tb_user.jenis_kelamin,
        tb_user.no_hp,
        tb_user.alamat
    FROM
        tb_user
    JOIN
        tb_penghuni_kamar ON tb_user.id_user = tb_penghuni_kamar.id_user
    JOIN
        tb_kost ON tb_penghuni_kamar.id_kamar = tb_kost.id_kamar;
    ");

        $this->db->bind(':id_user', $id_user);
        return $this->db->resultSet();
    }




    public function getDataPenyewa()
    {
        $this->db->query("SELECT
        tb_user.id_user,
        tb_user.nama_lengkap,
        tb_kost.nama_kost,
        tb_user.jenis_kelamin,
        tb_user.no_hp,
        tb_user.alamat
    FROM
        tb_user
    JOIN
        tb_penghuni_kamar ON tb_user.id_user = tb_penghuni_kamar.id_user
    JOIN
        tb_kamar ON tb_penghuni_kamar.id_kamar = tb_kamar.id_kamar
    JOIN
        tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
        WHERE tb_user.id_role = '3'");
        return $this->db->resultSet();
    }
    public function getPenyewaById($id_user)
    {
        $this->db->query("SELECT * FROM tb_user WHERE id_user = :id");
        $this->db->bind('id', $id_user);
        return $this->db->resultSet();
    }
    public function getAllPenyewaByUserId($id_user)
    {
        $this->db->query("SELECT
        tb_user.id_user,
        tb_user.nama_lengkap,
        tb_kost.nama_kost,
        tb_user.jenis_kelamin,
        tb_user.no_hp,
        tb_user.alamat
    FROM
        tb_user
    JOIN
        tb_penghuni_kamar ON tb_user.id_user = tb_penghuni_kamar.id_user
    JOIN
        tb_kost ON tb_penghuni_kamar.id_kamar = tb_kost.id_kamar;
        ");

        $this->db->bind(':id_user', $id_user);
        return $this->db->single(); // Menggunakan single() untuk mengambil satu baris data
    }
}
