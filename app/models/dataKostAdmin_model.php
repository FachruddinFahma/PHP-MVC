<?php
class dataKostAdmin_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKostMasuk()
    {
        $this->db->query("SELECT tb_kost.nama_kost, tb_user.nama_lengkap, tb_kost.id_kost, tb_kost.status ,
                COUNT(tb_kamar.id_kamar) as jumlah_kamar
                FROM tb_kost
                JOIN tb_user ON tb_user.id_user = tb_kost.id_user
                JOIN tb_kamar ON tb_kamar.id_kost = tb_kost.id_kost
                WHERE tb_kost.status = 'BELUM AKTIF'
                GROUP BY tb_kost.nama_kost, tb_user.nama_lengkap, tb_kost.id_kost, tb_kost.status");
        return $this->db->resultSet();
    }

    public function getKostTerkonfirmasi()
    {
        $this->db->query("SELECT tb_kost.nama_kost, tb_user.nama_lengkap, tb_kost.id_kost, tb_kost.status ,
                COUNT(tb_kamar.id_kamar) as jumlah_kamar
                FROM tb_kost
                JOIN tb_user ON tb_user.id_user = tb_kost.id_user
                JOIN tb_kamar ON tb_kamar.id_kost = tb_kost.id_kost
                WHERE tb_kost.status = 'AKTIF'
                GROUP BY tb_kost.nama_kost, tb_user.nama_lengkap, tb_kost.id_kost, tb_kost.status");
        return $this->db->resultSet();
    }

    public function terimaKost($id_kost)
    {
        $this->db->query("UPDATE tb_kost SET status = 'AKTIF' WHERE id_kost = '$id_kost'");
        $this->db->execute();
    }

    public function tolakKost($id_kost)
    {
        $this->db->query("DELETE FROM tb_kost WHERE id_kost = '$id_kost'");
        $this->db->execute();
    }
}
