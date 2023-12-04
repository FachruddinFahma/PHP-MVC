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

    public function getDataKost($id)
    {
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

    public function getTransactionHistory($id)
    {
        $this->db->query("SELECT tb_user.id_user,	
        tb_transaksi.id_transaksi,
        tb_user.nama_lengkap, 
            tb_transaksi.id_transaksi, 
            tb_transaksi.metode_pembayaran,
            tb_transaksi.tggl_transaksi,
            tb_transaksi.foto_bukti_bayar,
            tb_pemesanan.harga,
            tb_transaksi.bayar,
            tb_transaksi.status
            
            FROM tb_pemesanan
            JOIN tb_user ON tb_user.id_user = tb_pemesanan.id_user
            JOIN tb_transaksi ON tb_transaksi.id_pemesanan = tb_pemesanan.id_pemesanan
        WHERE tb_user.id_user = :idUser AND tb_transaksi.status = 'Lunas'
        ORDER BY tb_transaksi.`id_transaksi` DESC");

        $this->db->bind(':idUser', $id);
        return $this->db->resultSet();
    }

    public function getTransactionHistoryDetail($idUser, $idTransaksi)
    {
        $this->db->query("SELECT tb_user.id_user,	
        tb_transaksi.id_transaksi,
        tb_user.nama_lengkap, 
            tb_transaksi.id_transaksi, 
            tb_transaksi.metode_pembayaran,
            tb_transaksi.tggl_transaksi,
            tb_transaksi.foto_bukti_bayar,
            tb_pemesanan.harga,
            tb_transaksi.bayar,
            tb_transaksi.status
            
            FROM tb_pemesanan
            JOIN tb_user ON tb_user.id_user = tb_pemesanan.id_user
            JOIN tb_transaksi ON tb_transaksi.id_pemesanan = tb_pemesanan.id_pemesanan
            WHERE tb_user.id_user = :idUser AND tb_transaksi.id_transaksi = :idTransaksi AND tb_transaksi.status = 'Lunas'");

        $this->db->bind(':idUser', $idUser);
        $this->db->bind(':idTransaksi', $idTransaksi);
        return $this->db->single();
    }
}
