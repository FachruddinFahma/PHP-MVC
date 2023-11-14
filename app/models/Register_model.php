<?php
    class Register_model{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllUser(){
            $this->db->query("SELECT * FROM tb_user where id_role = 2 or id_role = 3");
            $result = $this->db->resultSet();
        }
        public function getlastid(){
            $this->db->query("SELECT id_user FROM tb_user ORDER BY id_user DESC LIMIT 1");
            return $this->db->resultSet();
            
        }

        public function addRegisterPemilik($dataPemilik)
        {
            $lastid = $this->getlastid();
            $lastidkestring = $lastid[0]["id_user"];
            $ambilangka3 = substr($lastidkestring, -3);
            $finallastid = '';

            if ($ambilangka3 < 9) {
                $lastid2 = intval($ambilangka3);
                $seklastid = $lastid2 + 1;
                $finallastid = 'USER00' . $seklastid;
            } elseif ($ambilangka3 < 99) {
                $lastid2 = intval($ambilangka3);
                $seklastid = $lastid2 + 1;
                $finallastid = 'USER0' . $seklastid;
            } elseif ($ambilangka3 < 1000) {
                $lastid2 = intval($ambilangka3);
                $seklastid = $lastid2 + 1;
                $finallastid = 'USER' . $seklastid;
            }

            // Hash password menggunakan MD5
            $hashedPassword = password_hash($dataPemilik["password"], PASSWORD_DEFAULT);

            $query = "INSERT INTO tb_user (`id_user`, `nama_lengkap`, `email`, `password`, `foto_user`, `id_role`) VALUES ('$finallastid', :nama_lengkap, :email, :password, :foto_user, 2)";
            $this->db->query($query);
            $this->db->bind("nama_lengkap", $dataPemilik["nama_lengkap"]);
            $this->db->bind("email", $dataPemilik["email"]);
            $this->db->bind("password", $hashedPassword); // Gunakan password yang sudah di-hash
            $this->db->bind("foto_user", $dataPemilik["foto_user"]); // Bind variabel foto_user
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function addRegisterPenyewa($dataPenyewa)
        {
            $lastid = $this->getlastid();
            $lastidkestring = $lastid[0]["id_user"];
            $ambilangka3 = substr($lastidkestring, -3);
            $finallastid = '';

            if ($ambilangka3 < 9) {
                $lastid2 = intval($ambilangka3);
                $seklastid = $lastid2 + 1;
                $finallastid = 'USER00' . $seklastid;
            } elseif ($ambilangka3 < 99) {
                $lastid2 = intval($ambilangka3);
                $seklastid = $lastid2 + 1;
                $finallastid = 'USER0' . $seklastid;
            } elseif ($ambilangka3 < 1000) {
                $lastid2 = intval($ambilangka3);
                $seklastid = $lastid2 + 1;
                $finallastid = 'USER' . $seklastid;
            }

            // Hash password menggunakan MD5
            $hashedPassword = password_hash($dataPenyewa["password"], PASSWORD_DEFAULT);

            $query = "INSERT INTO tb_user (`id_user`, `nama_lengkap`, `email`, `password`, `foto_user`, `id_role`) VALUES (:id_user, :nama_lengkap, :email, :password, :foto_user, 3)";
            $this->db->query($query);
            $this->db->bind("id_user", $finallastid);
            $this->db->bind("nama_lengkap", $dataPenyewa["nama_lengkap"]);
            $this->db->bind("email", $dataPenyewa["email"]);
            $this->db->bind("password", $hashedPassword);
            $this->db->bind("foto_user", $dataPenyewa["foto_user"]);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
?>

<?php

        // public function addRegisterPemilik($dataPemilik){
        //     $lastid = $this->getlastid();
        //     $lastidkestring = $lastid[0]["id_user"];
        //     $ambilangka3 = substr($lastidkestring, -3);
        //     $finallastid = '';

        //     if ($ambilangka3 < 9) {
        //         $lastid2 = intval($ambilangka3);
        //         $seklastid = $lastid2 + 1;
        //         $finallastid = 'USER00' . $seklastid;
        //     } elseif ($ambilangka3 < 99) {
        //         $lastid2 = intval($ambilangka3);
        //         $seklastid = $lastid2 + 1;
        //         $finallastid = 'USER0' . $seklastid;
        //     } elseif ($ambilangka3 < 1000) {
        //         $lastid2 = intval($ambilangka3);
        //         $seklastid = $lastid2 + 1;
        //         $finallastid = 'USER' . $seklastid;
        //     }
        //     // var_dump($lastid);
        //     // var_dump($lastid2);
        //     // var_dump($finallastid);

        //     $query = "INSERT INTO tb_user (`id_user`, `nama_lengkap`, `email`, `password`, `foto_user`, `id_role`) VALUES ('$finallastid', :nama_lengkap, :email, :password, :foto_user, 2)";
        //     $this->db->query($query);
        //     $this->db->bind("nama_lengkap", $dataPemilik["nama_lengkap"]);
        //     $this->db->bind("email", $dataPemilik["email"]);
        //     $this->db->bind("password", $dataPemilik["password"]);
        //     $this->db->bind("foto_user", $dataPemilik["foto_user"]); // Bind variabel foto_user

        //     $this->db->execute();
            
        //     return $this->db->rowCount();
        // }
?>