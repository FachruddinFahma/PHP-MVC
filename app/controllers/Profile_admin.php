<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Profile_admin extends Controller
{
    public function index()
    {
        $id_user = $_SESSION['id_user'];
        $data['judul'] = 'Profile';
        $data['profile'] = $this->model('profile_model')->getProfile($id_user);

        $this->view('templatesAdmin/header', $data);
        $this->view('admin/profileAdmin/index', $data);
        $this->view('templatesAdmin/footer');
    }

    public function updateUser($id_user)
    {
        error_log("Metode updateUser dipanggil dengan id_user = " . $id_user);
        var_dump($_POST); // Ini akan mencetak data POST ke log
        // Ambil data yang diperlukan dari $_POST'

        $file_tmp = $_FILES['profile_picture']['tmp_name'];
        $file_name = $_FILES['profile_picture']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $foto_user = $file_name; // Sesuaikan dengan nama file yang diinginkan

        // Pindahkan file sementara ke lokasi yang diinginkan
        move_uploaded_file($file_tmp, "../public/foto/{$foto_user}");

        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $tggl_lahir = $_POST['tggl_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];



        if ($this->model('ProfileAdmin_Model')->updateUser($id_user, $nama_lengkap, $email, $password, $tggl_lahir, $jenis_kelamin, $alamat, $no_hp, $foto_user) > 0) {
            header('Location: http://localhost/PHP-MVC/public/login1');
        } else {
            header('Location: http://localhost/PHP-MVC/public/profile');
            exit;
        }
    }
    // public function updateFoto($id_user)
    // {
    //     error_log("Metode updateFoto dipanggil dengan id_user = " . $id_user);
    //     var_dump($_FILES); // Ini akan mencetak data file yang diunggah ke log

    //     if(isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
    //         $file_tmp = $_FILES['profile_picture']['tmp_name'];
    //         $file_name = $_FILES['profile_picture']['name'];
    //         $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    //         $foto_user = $file_name; // Sesuaikan dengan nama file yang diinginkan

    //         // Pindahkan file sementara ke lokasi yang diinginkan
    //         move_uploaded_file($file_tmp, "../public/foto/{$foto_user}");

    //         // Panggil model untuk memperbarui nama file gambar di basis data
    //         if ($this->model('Profile_Model')->updateFoto($id_user, $file_name) > 0) {
    //             header('Location: http://localhost/PHP-MVC/public/login1');
    //     } else {
    //         header('Location: http://localhost/PHP-MVC/public/profile');
    //         exit;
    //     }
    //     }

    //     // Handle kesalahan unggah file (jika ada)
    //     // ...
    // }
}
