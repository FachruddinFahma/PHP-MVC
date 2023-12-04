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

        public function getAllLaporan($id_user)
        {
            $this->db->query("SELECT tb_kost.id_kost, tb_transaksi.id_transaksi, tb_user.nama_lengkap, tb_pemesanan.harga, tb_transaksi.bayar,
                            tb_transaksi.tggl_transaksi,tb_transaksi.foto_bukti_bayar, tb_transaksi.status
            
            FROM tb_pemesanan
            JOIN tb_user ON tb_user.id_user = tb_pemesanan.id_user
            JOIN tb_transaksi ON tb_transaksi.id_pemesanan = tb_pemesanan.id_pemesanan
            JOIN tb_kamar ON tb_kamar.id_kamar = tb_pemesanan.id_kamar
            JOIN tb_kost on tb_kamar.id_kost = tb_kost.id_kost
            WHERE tb_user.id_role = '3' AND tb_kost.id_user = :id_user AND tb_transaksi.status = 'Lunas'
            ORDER BY tb_transaksi.tggl_transaksi DESC");
        
            $this->db->bind(':id_user', $id_user);
            return $this->db->resultSet();
        }

        public function searchByDate($id_user, $tanggal_awal, $tanggal_akhir)
        {
            $this->db->query("SELECT tb_kost.id_kost, tb_transaksi.id_transaksi, tb_user.nama_lengkap, tb_pemesanan.harga, 
                    tb_transaksi.bayar, tb_transaksi.tggl_transaksi, tb_transaksi.foto_bukti_bayar, tb_transaksi.status
                            
                FROM tb_pemesanan
                JOIN tb_user ON tb_user.id_user = tb_pemesanan.id_user
                JOIN tb_transaksi ON tb_transaksi.id_pemesanan = tb_pemesanan.id_pemesanan
                JOIN tb_kamar ON tb_kamar.id_kamar = tb_pemesanan.id_kamar
                JOIN tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
                WHERE tb_user.id_role = '3' AND tb_kost.id_user = :id_user 
                    AND tb_transaksi.status = 'Lunas' AND tb_transaksi.tggl_transaksi BETWEEN :start_date AND :end_date");

            $this->db->bind(':id_user', $id_user);
            $this->db->bind(':start_date', $tanggal_awal . ' 00:00:00');
            $this->db->bind(':end_date', $tanggal_akhir . ' 23:59:59');

            return $this->db->resultSet();
        }
    }
?>