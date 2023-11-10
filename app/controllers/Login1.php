<?php
class Login1 extends Controller
{

    public function index()
    {
        $data['judul'] = 'login1';
        $this->view('pemilik_kost/login1/login1', $data);
        $this->view('templates/footer');
    }
    public function cekLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $data['login1'] = $this->model('Login_model')->prosesLogin($email, $password);


        if ($data['login1'] == NULL) {
            header("Location: http://localhost/PHP-MVC/public/login1");
        } else {
            $ambil_id_role = $data["login1"]["id_role"];
            $ambil_id_user = $data["login1"]["id_user"];
            $_SESSION['id_user'] = $ambil_id_user;

            $data2['login1'] = $this->model('Login_model')->getKost($ambil_id_user);

            $ambil_id_kost = $data2["login1"]["id_kost"];
            echo $ambil_id_kost;

            if ($ambil_id_role == 1) {
                header('Location: http://localhost/PHP-MVC/public/dashboard');
            } elseif ($ambil_id_role == 2) {
                if ($ambil_id_kost) {
                    header('Location: http://localhost/PHP-MVC/public/dashboard');
                } else {
                    header('Location: http://localhost/PHP-MVC/public/pendaftaran_kost');
                }
            } elseif ($ambil_id_role == 3) {
                header('Location: http://localhost/PHP-MVC/public/kamar');
            } else {
                echo 'Login gagal. Silakan coba lagi';
            }
            echo "masuk else 3";
        }
    }
}
