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
        `tb_user`.`foto_user`,
        `tb_kamar`.`id_kamar` AS 'Nomor Kamar', 
        `tb_kamar`.`fasilitas`, 
        -- `tb_kamar`.`kategori`, 
        `tb_kamar`.`ukuran` AS 'Ukuran Kamar',
        `tb_kost`.`nama_kost`, 
        `tb_kost`.`alamat` AS 'Alamat Kost',
        `tb_kamar`.`harga_bulanan`    
        FROM `tb_penghuni_kamar`
        JOIN `tb_user` ON tb_penghuni_kamar.`id_user` = tb_user.`id_user`
        JOIN `tb_kamar` ON tb_penghuni_kamar.`id_kamar` = tb_kamar.`id_kamar`
        JOIN `tb_kost` ON tb_kamar.`id_kost` = tb_kost.`id_kost`
        WHERE `tb_user`.`id_user` = :id_user");
        $this->db->bind(':id_user', $id);
        return $this->db->single();
    }
}
