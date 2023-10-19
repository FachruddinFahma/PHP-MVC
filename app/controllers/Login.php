<?php
    class Login extends Controller {

        public function index()
        {
            $data['judul'] = 'Login';
            $this->view('pemilik_kost/login/login', $data);
            $this->view('templates/footer');
        }

        public function cekLogin()
        {
            // Ambil data yang diperlukan dari $_POST
            $username = $_POST['username'];
            $password = $_POST['password'];

            $data['login'] = $this->model('Login_model')->loginAdmin($username, $password);
            

            session_start();
            if($data['login'] == NULL) {
                header("Location: http://localhost/phpmvc/public/login");
            }else {
                foreach ($data['login'] as $row) ;
                $_SESSION['username'] = $row['username'];
                header("Location: http://localhost/phpmvc/public/penghuni");
            }
        }
    }
?>