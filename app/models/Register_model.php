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

            $lastid = $this->getlastid();
            $lastidkestring = $lastid[0]["id_user"];
            $lastid1 = intval($lastidkestring);
            $finallastid = $lastid1 + 1 ; 
            
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
        

    }
?>