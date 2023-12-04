<?php
class Login1 extends Controller
{

    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('pemilik_kost/login1/login1', $data);
        $this->view('templates/footer');
    }

    public function cekLogin()
{
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Hash password menggunakan MD5
    $data['login1'] = $this->model('Login_model')->prosesLogin($email);
    
    if ($data['login1']['email'] == $email && password_verify($password, $data['login1']['password'])) {
        session_start();

        if ($data['login1'] == NULL) {
            header("Location: http://localhost/PHP-MVC/public/login1");
        } else {
            $ambil_id_role = $data["login1"]["id_role"];
            $ambil_id_user = $data["login1"]["id_user"];
            $ambil_nama_user = $data["login1"]["nama_lengkap"];
            $ambil_foto_user = $data["login1"]["foto_user"];
            $_SESSION['id_user'] = $ambil_id_user;
            $_SESSION['nama_user'] = $ambil_nama_user;
            $_SESSION['foto_user'] = $ambil_foto_user;
            $_SESSION['showModal'] = true;

            $data2['login1'] = $this->model('Login_model')->getKost($ambil_id_user);

            $ambil_id_kost = $data2["login1"]["id_kost"];
            echo "alert('oke')";
            // echo "<script>";
            // echo "Swal.fire('Success!', 'Your action was successful!', 'success');";
            // echo "</script>";
            if ($ambil_id_role == 1) {
                header('Location: http://localhost/PHP-MVC/public/dashboardAdmin');
            } elseif ($ambil_id_role == 2) {
                if ($ambil_id_kost) {
                    header('Location: http://localhost/PHP-MVC/public/dashboard');
                } else {    
                    header('Location: http://localhost/PHP-MVC/public/pendaftaran_kost');
                }
            } elseif ($ambil_id_role == 3) {
                header('Location: http://localhost/PHP-MVC/public/landing_page');
            } else {
                echo 'Login gagal. Silakan coba lagi';
            }
            echo "masuk else 3";
        }
    }
}
public function cekNotif()
{
    echo "<script>";
    echo "Swal.fire('Success!', 'Your action was successful!', 'success');";
    //echo "alert('haloo')";
    echo "</script>";
   
}
   
}