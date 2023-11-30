<?php
    class Pembayaran_model
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getFotoQris()
        {
            $this->db->query("SELECT tb_kost.foto_qris 
                            FROM tb_kamar
                            JOIN tb_kost ON tb_kamar.id_kost = tb_kost.id_kost
                            WHERE tb_kamar.id_kamar = 'KMR004'");
            // $this->db->bind(':id_kamar', $id_kamar);
            $this->db->execute();
            return $this->db->single(); 
        }
    }
?>
