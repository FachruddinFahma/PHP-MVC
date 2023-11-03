<?php
class profile_model{
    private $db;
    public function __construct()
        {
            $this->db = new Database;
        }

        
        public function getProfile($id) 
        {
            $this->db->query("SELECT * FROM tb_user WHERE id_user = :id");
            $this->db->bind('id',$id);
            return $this->db->resultSet();

        }
}
?>