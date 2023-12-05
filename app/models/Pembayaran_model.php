<?php
    // class Pembayaran_model
    // {
    //     private $db;

    //     public function __construct()
    //     {
    //         $this->db = new Database;
    //     }

    //     public function getFotoQris($id_kamar)
    //     {
    //         $this->db->query("SELECT tb_kost.foto_qris, tb_kamar.harga_bulanan 
    //                         FROM tb_kamar
    //                         JOIN tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
    //                         WHERE tb_kamar.id_kamar = :id_kamar");
    //             $this->db->bind(':id_kamar', $id_kamar);
    //             return $this->db->single(); 
    //     }

    //     public function addBuktiTF()
    //     {
    //         $fotoQris = $_FILES['bukti_tf']['tmp_name'];
    //         $uploadDir = '../public/qris/'; 
    //         $fotoQrisName = basename($_FILES['bukti_tf']['name']);
    //         move_uploaded_file($fotoQris, $uploadDir . $fotoQrisName);

    //         $query = "INSERT INTO tb_pemesanan (bukti_tf) VALUES (:bukti_tf)";
    //         $this->db->query($query);
    //         $this->db->bind(':bukti_tf', $fotoQrisName);
    //         $this->db->execute();
    //     }
    // }
?>