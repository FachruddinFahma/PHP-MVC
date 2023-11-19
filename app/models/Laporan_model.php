<?php
class laporan_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLaporan($id)
    {
        $this->db->query("SELECT * FROM tb_user WHERE id_user = :id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getAllLaporan($id)
    {
        $this->db->query("SELECT
        tb_transaksi.id_transaksi,
        tb_user.nama_lengkap,
        tb_pemesanan.harga,
        tb_transaksi.bayar,
        tb_transaksi.tggl_transaksi,
        tb_transaksi.foto_bukti_bayar,
        tb_pemesanan.status
        FROM 
        tb_transaksi
        JOIN 
        tb_pemesanan ON tb_pemesanan.id_pemesanan = tb_transaksi.id_pemesanan
        JOIN 
        tb_user ON tb_user.id_user = tb_pemesanan.id_user
        WHERE tb_user.id_user = :id");
    
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
    public function searchByDate($id,  $tanggal_awal,  $tanggal_akhir)
    {
        $this->db->query("SELECT
            tb_transaksi.id_transaksi,
            tb_user.nama_lengkap,
            tb_pemesanan.harga,
            tb_transaksi.bayar,
            tb_transaksi.tggl_transaksi,
            tb_transaksi.foto_bukti_bayar,
            tb_pemesanan.status
            FROM 
            tb_transaksi
            JOIN 
            tb_pemesanan ON tb_pemesanan.id_pemesanan = tb_transaksi.id_pemesanan
            JOIN 
            tb_user ON tb_user.id_user = tb_pemesanan.id_user
            WHERE tb_user.id_user = :id
            AND tb_transaksi.tggl_transaksi BETWEEN :tanggal_awal AND :tanggal_akhir");

        $this->db->bind(':id', $id);
        $this->db->bind(':start_date',  $tanggal_awal);
        $this->db->bind(':end_date',  $tanggal_akhir);

        return $this->db->resultSet();
    }

    }
?>