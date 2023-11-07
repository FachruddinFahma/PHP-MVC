<?php
class Profile extends Controller
{
    public function index()
    {
    
        $data['judul'] = 'Profile';
        $data['profile'] = $this->model('profile_model')->getProfile("PGH001"); 

        $this->view('templates/header', $data);
        $this->view('pemilik_kost/profile/index', $data);
        $this->view('templates/footer');;
    }


    public function updateUser($id_user)
    {
        error_log("Metode updateUser dipanggil dengan id_user = " . $id_user);
        var_dump($_POST); // Ini akan mencetak data POST ke log
        // Ambil data yang diperlukan dari $_POST
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $tggl_lahir = $_POST['tggl_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
    
        if ($this->model('Profile_Model')->updateUser($id_user, $nama_lengkap, $email, $password, $tggl_lahir, $jenis_kelamin, $alamat, $no_hp) > 0) {
            header('Location: http://localhost/PHP-MVC/public/login1');
        } else {
            header('Location: http://localhost/PHP-MVC/public/profile');
            exit;
        }
        
    }
    
    
}


