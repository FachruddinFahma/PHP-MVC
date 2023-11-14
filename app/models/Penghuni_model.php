<?php
class Penghuni_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenghuni_TestApi()
    {
        $this->db->query("SELECT * FROM tb_user WHERE tb_user.id_role = '3'");
        return $this->db->resultSet();
    }

    public function getUserById($id_user)
    {
        $this->db->query("SELECT * FROM tb_user WHERE id_user = :id");
        $this->db->bind('id', $id_user);
        return $this->db->resultSet();
    }


    public function getAllPenghuniByUserId($id_user)
    {
        $this->db->query("SELECT tb_user.tggl_lahir, tb_user.email, tb_user.foto_user, tb_user.id_user, nama_lengkap, tb_kamar.id_kamar, tb_user.jenis_kelamin, tb_user.alamat, tb_user.no_hp 
        FROM tb_penghuni_kamar 
        JOIN tb_user ON tb_user.id_user = tb_penghuni_kamar.id_user 
        JOIN tb_kamar ON tb_kamar.id_kamar = tb_penghuni_kamar.id_kamar 
        JOIN tb_kost ON tb_kost.id_kost = tb_kamar.id_kost
        WHERE tb_user.id_role = '3' AND tb_kost.id_user = :id_user");
        
        $this->db->bind(':id_user', $id_user);
        return $this->db->resultSet();
    }

    public function addPenghuni($data)
    {
        $query = "INSERT INTO tb_penghuni VALUES ('', :nama_penghuni, :alamat, :jenis_kelamin, :agama, :foto)";
        $this->db->query($query);
        $this->db->bind('nama_penghuni', $data['nama_penghuni']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jenis_kelamin', $data['rdJK']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePenghuni($id_Penghuni)
    {
        $query = "DELETE FROM tb_penghuni_kamar WHERE id_user = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id_Penghuni);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function getPenghuniById($id_Penghuni)
    {
        $this->db->query('SELECT * FROM tb_penghuni WHERE id_Penghuni = :id');
        $this->db->bind('id', $id_Penghuni);
        return $this->db->single();
    }

    public function updatePenghuni($id_Penghuni, $nama_penghuni, $alamat)
    {
        $this->db->query('UPDATE tb_penghuni SET nama_penghuni = :nama_penghuni, alamat = :alamat WHERE id_Penghuni = :id');
        $this->db->bind(':id', $id_Penghuni);
        $this->db->bind(':nama_penghuni', $nama_penghuni);
        $this->db->bind(':alamat', $alamat);
        return $this->db->execute();
    }
}
