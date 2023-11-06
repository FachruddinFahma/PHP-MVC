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
        public function addRegisterPemilik($dataPemilik){
            //tambah i user yang "USER0002"
            $lastid = $this->getlastid();
            $lastidkestring = $lastid[0]["id_user"];
            $ambilangka3 = substr($lastidkestring, -4);
            if($ambilangka3 < 9){
                $lastid1 = intval($ambilangka3);
                $seklastid = $lastid1 +1;
                $finallastid = 'USER000'. $seklastid;
            }elseif($ambilangka3 > 99){
                $lastid1 = intval($ambilangka3);
                $seklastid = $lastid1 + 1;
                $finallastid = 'USER00'. $seklastid;
                echo $finallastid;
            }elseif($ambilangka3 > 999){
                $lastid1 = intval($ambilangka3);
                $seklastid = $lastid1+1;
                $finallastid = 'USER0'. $seklastid;
            }elseif($ambilangka3 < 10000 ){
                $lastid1 = intval($ambilangka3);
                $seklastid = $lastid1 + 1;
                $finallastid = 'USER'.$seklastid;
            }
            var_dump($lastid);
            var_dump($lastid1);
            var_dump($finallastid);

            
                $query = "INSERT INTO tb_user (`id_user`, `nama_lengkap`, `email`, `password`,`foto_user`, `id_role`) VALUES ('$finallastid',:nama_lengkap, :email, :password, '', 2)";
            $this->db->query($query);
            $this->db->bind("nama_lengkap", $dataPemilik["nama_lengkap"]);
            $this->db->bind("email", $dataPemilik["email"]);
            $this->db->bind("password", $dataPemilik["password"]);
            // $this->db->bind("foto_user", $dataPemilik["foto_user"]);
            // echo $lastid;
            $this->db->execute();
            
            return $this->db->rowCount();
        }
        public function addRegisterPenyewa($dataPenyewa){
            $lastid = $this->getlastid();
            $lastidkestring = $lastid[0]["id_user"];
            $ambilangka3 = substr($lastidkestring, -4);
            if($ambilangka3 < 9 ){
                $lastid2 = intval($ambilangka3);
            $seklastid = $lastid2 + 1 ;
            $finallastid = 'USER000'.$seklastid;
            } elseif($ambilangka3 < 99 ) {
                $lastid2 = intval($ambilangka3);
            $seklastid = $lastid2 + 1 ;
            $finallastid = 'USER00'.$seklastid;
                echo $finallastid;
        } elseif($ambilangka3 < 999 ) {
            $lastid2 = intval($ambilangka3);
        $seklastid = $lastid2 + 1 ;
        $finallastid = 'USER0'.$seklastid;
        } elseif($ambilangka3 <10000) {
            $lastid2 = intval($ambilangka3);
        $seklastid = $lastid2 + 1 ;
        $finallastid = 'USER'.$seklastid;
        }
            echo $finallastid;
            
            var_dump($lastid);
            var_dump($lastid2);
            var_dump($finallastid);

            
                $query = "INSERT INTO tb_user (`id_user`, `nama_lengkap`, `email`, `password`,`foto_user`, `id_role`) VALUES ('$finallastid',:nama_lengkap, :email, :password, '', 3)";
            $this->db->query($query);
            $this->db->bind("nama_lengkap", $dataPenyewa["nama_lengkap"]);
            $this->db->bind("email", $dataPenyewa["email"]);
            $this->db->bind("password", $dataPenyewa["password"]);
            // $this->db->bind("foto_user", $dataPemilik["foto_user"]);
            // echo $lastid;
            $this->db->execute();
            
            return $this->db->rowCount();
        }

    }
?>