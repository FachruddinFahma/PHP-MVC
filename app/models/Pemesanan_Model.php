<?php
class Pemesanan_Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPemesananMasuk($id_user)
    {
        $this->db->query("SELECT tb_pemesanan.id_pemesanan, tb_kamar.id_kamar, tb_kamar.nama_kamar, tb_user.id_user, tb_user.nama_lengkap, tb_pemesanan.tggl_pemesaan, 
        tb_pemesanan.tggl_masuk, tb_pemesanan.tggl_keluar, tb_pemesanan.harga, tb_pemesanan.kategori, tb_pemesanan.metode_pembayaran, tb_pemesanan.bukti_tf, tb_pemesanan.status
        FROM tb_pemesanan
        JOIN tb_user ON tb_user.id_user = tb_pemesanan.id_user
        JOIN tb_kamar ON tb_kamar.id_kamar = tb_pemesanan.id_kamar
        JOIN tb_kost on tb_kamar.id_kost = tb_kost.id_kost
        WHERE tb_user.id_role = '3' AND tb_kost.id_user = :id_user AND tb_pemesanan.status = 'masuk'");

        $this->db->bind(':id_user', $id_user);
        return $this->db->resultSet();
    }

    public function getPemesananTerkonfirmasi($id_user)
    {
        $this->db->query("SELECT tb_pemesanan.id_pemesanan, tb_kamar.id_kamar, tb_kamar.nama_kamar, tb_user.id_user, tb_user.nama_lengkap, tb_pemesanan.tggl_pemesaan, 
        tb_pemesanan.tggl_masuk, tb_pemesanan.tggl_keluar, tb_pemesanan.harga, tb_pemesanan.kategori, tb_pemesanan.metode_pembayaran, tb_pemesanan.bukti_tf, tb_pemesanan.status
        FROM tb_pemesanan
        JOIN tb_user ON tb_user.id_user = tb_pemesanan.id_user
        JOIN tb_kamar ON tb_kamar.id_kamar = tb_pemesanan.id_kamar
        JOIN tb_kost on tb_kamar.id_kost = tb_kost.id_kost
        WHERE tb_user.id_role = '3' AND tb_kost.id_user = :id_user AND tb_pemesanan.status = 'terkonfirmasi'");

        $this->db->bind(':id_user', $id_user);
        return $this->db->resultSet();
    }

    public function terimaPesanan($id_pemesanan)
    {
        // Ambil data `id_user` dan `id_kamar` dari tabel `tb_pemesanan`
        $this->db->query("SELECT id_user, id_kamar FROM tb_pemesanan WHERE id_pemesanan = :id_pemesanan");
        $this->db->bind(':id_pemesanan', $id_pemesanan);
        $result = $this->db->single();

        // Pastikan data ditemukan
        if ($result) {
            $id_user = $result['id_user'];
            $id_kamar = $result['id_kamar'];

            // Update status pemesanan
            $this->db->query("UPDATE `tb_pemesanan` SET `status` = 'terkonfirmasi' WHERE `id_pemesanan` = :id_pemesanan");
            $this->db->bind(':id_pemesanan', $id_pemesanan);
            $this->db->execute();

            // Tambahkan data ke dalam `tb_penghuni_kamar`
            $this->db->query("INSERT INTO `tb_penghuni_kamar` (`id_user`, `id_kamar`) VALUES (:id_user, :id_kamar)");
            $this->db->bind(':id_user', $id_user);
            $this->db->bind(':id_kamar', $id_kamar);
            $this->db->execute();
        }
    }

    public function tolakPesanan($id_pemesanan)
    {
        $this->db->query("DELETE FROM `tb_pemesanan` WHERE id_pemesanan = '$id_pemesanan'");
        $this->db->execute();
    }
}
