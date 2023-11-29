<?php
class GetDataApi_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT `tb_user`.`id_user`, 
        `tb_user`.`nama_lengkap` AS 'Nama Penghuni',
        `tb_user`.`email`, 
        `tb_user`.`password`, 
        `tb_user`.`alamat` AS 'Alamat User',
        `tb_user`.`no_hp` AS 'Notelp User',
        `tb_user`.`jenis_kelamin` AS 'Jenis Kelamin',
        `tb_user`.`tggl_lahir` AS 'Tanggal Lahir',
        `tb_user`.`foto_user`,
        `tb_kamar`.`id_kamar` AS 'Nomor Kamar', 
        `tb_kamar`.`ukuran` AS 'Ukuran Kamar',
        `tb_kamar`.`harga_bulanan`
        FROM `tb_penghuni_kamar`
        JOIN `tb_user` ON tb_penghuni_kamar.`id_user` = tb_user.`id_user`
        JOIN `tb_kamar` ON tb_penghuni_kamar.`id_kamar` = tb_kamar.`id_kamar`
        WHERE `tb_user`.`id_user` = :id_user");
        $this->db->bind(':id_user', $id);
        return $this->db->single();
    }

    public function getDataKost($id){
        $this->db->query("SELECT tb_kost.nama_kost, 
        tb_kost.alamat,
        tb_user.nama_lengkap AS 'nama_pemilik',
        tb_user.no_hp,
        tb_kost.fasilitas_kost,
        tb_kost.peraturan_kost,
        tb_foto_kost.link_fotoKost,
        tb_kost.jenis_bank, 
        tb_kost.no_rekening, 
        tb_kost.nama_rekening, 
        tb_kost.foto_qris
        FROM tb_kost
        JOIN tb_kamar ON tb_kamar.id_kost = tb_kost.id_kost
        JOIN tb_foto_kost ON tb_foto_kost.id_kost = tb_kost.id_kost
        JOIN tb_user ON tb_user.id_user = tb_kost.id_user
        WHERE tb_kamar.id_kamar = :id_kamar");
        $this->db->bind(':id_kamar', $id);
        return $this->db->single();
    }
}
