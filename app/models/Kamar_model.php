<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Kamar_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKamar($id_kost)
    {
        $this->db->query('SELECT * FROM tb_kamar WHERE id_kost = :id_kost');
        $this->db->bind(':id_kost', $id_kost);
        return $this->db->resultSet();
    }
    public function getIDOtomatis()
    {
        $this->db->query('SELECT id_kamar FROM tb_kamar ORDER BY id_kamar DESC LIMIT 1');
        $result = $this->db->single();
        if ($result) {
            return $result;
        } else {
            return null;
        }
    }

    // models Kamar_model
    public function addKamar($kamar, $id_kost)
    {
            // Mendapatkan nama file sementara
            $foto1 = $_FILES['foto1']['tmp_name'];
            $foto2 = $_FILES['foto2']['tmp_name'];
            $foto3 = $_FILES['foto3']['tmp_name'];
            $uploadDir = '../public/image/kamar'; 
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $fotoName1 = basename($_FILES['foto1']['name']);
            $fotoName2 = basename($_FILES['foto2']['name']);
            $fotoName3 = basename($_FILES['foto3']['name']);

            // Memindahkan file ke lokasi penyimpanan
            move_uploaded_file($foto1, $uploadDir . '/' . $fotoName1);
            move_uploaded_file($foto2, $uploadDir . '/' . $fotoName2);
            move_uploaded_file($foto3, $uploadDir . '/' . $fotoName3);

            
            $query = "INSERT INTO tb_kamar VALUES (:id_kamar, :nama_kamar, :fasilitas, :ukuran, :harga_harian, :harga_bulanan, :harga_3bulan, :harga_tahunan, :id_kost, :status)";
            $this->db->query($query);
            $this->db->bind(':id_kamar', $kamar['id_kamar']);
            $this->db->bind(':nama_kamar', $kamar['nama_kamar']);
            $this->db->bind(':fasilitas', $kamar['fasilitas']);
            $this->db->bind(':ukuran', $kamar['ukuran']);
            $this->db->bind(':harga_harian', $kamar['harga_harian']);
            $this->db->bind(':harga_bulanan', $kamar['harga_bulanan']);
            $this->db->bind(':harga_3bulan', $kamar['harga_3bulan']);
            $this->db->bind(':harga_tahunan', $kamar['harga_tahunan']);
            $this->db->bind(':id_kost', $id_kost);
            $this->db->bind(':status', "kosong");
            $this->db->execute();

            $combinedFilenames = $fotoName1 . ',' . $fotoName2 . ',' . $fotoName3;
            $queryFoto = "INSERT INTO tb_foto_kamar VALUES (:id_kamar, :link_fotoKamar)";
            $this->db->query($queryFoto);
            $this->db->bind(':id_kamar', $kamar['id_kamar']);
            $this->db->bind('link_fotoKamar', $combinedFilenames);
            $this->db->execute();
            return $this->db->rowCount();
    }

    public function updateKamarById($kamar)
    {
        $query = "UPDATE tb_kamar SET `nama_kamar` = :nama_kamar, `fasilitas` = :fasilitas, `ukuran` = :ukuran, `harga_harian` = :harga_harian, `harga_bulanan` = :harga_bulanan, `harga_3bulanan` = :harga_3bulanan, `harga_tahunan` = :harga_tahunan WHERE `id_kamar` = :id_kamar";
        $this->db->query($query);
        $this->db->bind(':nama_kamar', $kamar['nama_kamar']);
        $this->db->bind(':fasilitas', $kamar['fasilitas']);
        $this->db->bind(':ukuran', $kamar['ukuran']);
        $this->db->bind(':harga_harian', $kamar['harga_harian']);
        $this->db->bind(':harga_bulanan', $kamar['harga_bulanan']);
        $this->db->bind(':harga_3bulanan', $kamar['harga_3bulanan']);
        $this->db->bind(':harga_tahunan', $kamar['harga_tahunan']);
        $this->db->bind(':id_kamar', $kamar['id_kamar']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function deleteKamar($id_kamar)
    {
        $query = "DELETE FROM tb_kamar WHERE id_kamar = :id_kamar";

        $this->db->query($query);
        $this->db->bind(':id_kamar', $id_kamar);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getKamarById($id_kamar)
    {
        $this->db->query('SELECT * FROM tb_kamar WHERE id_kamar = :id_kamar');
        $this->db->bind(':id_kamar', $id_kamar);
        return $this->db->single();
    }

}