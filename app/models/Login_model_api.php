<?php
class Login_model_api
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserByEmail($email)
    {
        $this->db->query("SELECT `tb_user`.`id_user`, 
        `tb_user`.`email`, 
        `tb_user`.`password`, 
        `tb_kamar`.`id_kamar` AS 'Nomor Kamar', 
        `tb_kamar`.`harga_bulanan`
        FROM `tb_penghuni_kamar`
        JOIN `tb_user` ON tb_penghuni_kamar.`id_user` = tb_user.`id_user`
        JOIN `tb_kamar` ON tb_penghuni_kamar.`id_kamar` = tb_kamar.`id_kamar`
        WHERE `tb_user`.`email` = :email");
        $this->db->bind(':email', $email);
        return $this->db->single();
    }

    public function checkLogin($email, $password)
    {
        $this->db->query("SELECT `tb_user`.`id_user`, 
        `tb_user`.`email`, 
        `tb_user`.`password`, 
        `tb_kamar`.`id_kamar` AS 'Nomor Kamar', 
        `tb_kamar`.`harga_bulanan`
        FROM `tb_penghuni_kamar`
        JOIN `tb_user` ON tb_penghuni_kamar.`id_user` = tb_user.`id_user`
        JOIN `tb_kamar` ON tb_penghuni_kamar.`id_kamar` = tb_kamar.`id_kamar`
        WHERE `tb_user`.`email` = :email AND id_role = 3");
        $this->db->bind(':email', $email);

        $user = $this->db->single();

        if ($user) {
            $hashedPassword = $user['password'];
            if (password_verify($password, $hashedPassword)) {
                return $user; // Return user data if password matches
            }
        }

        return null; // Return null if user or password doesn't match
    }
}
