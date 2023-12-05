<?php
class EditDataApi_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        date_default_timezone_set('Asia/Jakarta');
    }

    public function updateUser($nama, $foto, $noHp, $alamat, $jk, $tglLahir, $idUser)
    {
        $query = "UPDATE tb_user SET 
        nama_lengkap = :nama, 
        foto_user = :foto, 
        no_hp = :noHp, 
        alamat = :alamat, 
        jenis_kelamin = :jk, 
        tggl_lahir = :tglLahir 
        WHERE id_user = :idUser";

        $this->db->query($query);
        $this->db->bind(':nama', $nama);
        $this->db->bind(':noHp', $noHp);
        $this->db->bind(':foto', $foto);
        $this->db->bind(':alamat', $alamat);
        $this->db->bind(':jk', $jk);
        $this->db->bind(':tglLahir', $tglLahir);
        $this->db->bind(':idUser', $idUser);

        $this->db->execute();
        return true;
    }

    public function updatePassword($password, $idUser)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE tb_user SET password = :pass
        WHERE id_user = :idUser";

        $this->db->query($query);
        $this->db->bind(':pass', $hashedPassword);
        $this->db->bind(':idUser', $idUser);

        $this->db->execute();
        return true;
    }

    public function getStoredPassword($idUser)
    {
        $query = "SELECT password FROM tb_user WHERE id_user = :idUser";

        $this->db->query($query);
        $this->db->bind(':idUser', $idUser);
        $storedPassword = $this->db->single();

        return $storedPassword['password'];
    }

    public function getStoredUserData($emailUser)
    {
        try {
            $query = "SELECT id_user, nama_lengkap, email FROM tb_user WHERE email = :email AND id_role = 3";
            $this->db->query($query);
            $this->db->bind(':email', $emailUser);
            $this->db->execute(); // Eksekusi query

            $storedUser = $this->db->single();

            return ($storedUser) ? $storedUser : null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function transaction($id, $bayar, $metodeBayar, $fotoBukti)
    {

        $query = "UPDATE tb_transaksi SET bayar = :bayar, 
    metode_pembayaran = :metode, 
    foto_bukti_bayar = :foto,
    tggl_transaksi = :tgl_bayar, 
    status = 'Proses'
    WHERE id_transaksi = :idPesan";

        $tgl_transaksi = date('Y-m-d H:i:s');

        $this->db->query($query);
        $this->db->bind(':bayar', $bayar);
        $this->db->bind(':metode', $metodeBayar);
        $this->db->bind(':foto', $fotoBukti);
        $this->db->bind(':tgl_bayar', $tgl_transaksi);
        $this->db->bind(':idPesan', $id);

        $this->db->execute();
        return true;
    }
}
