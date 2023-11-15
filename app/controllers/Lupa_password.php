<?php
    class Lupa_password extends Controller {

        public function index()
        {
            $data['judul'] = 'Lupa Password';
            $this->view('pemilik_kost/login1/lupa_password', $data);
            $this->view('templates/footer');
        }
        
        public function gantiPassword()
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $konfirpassword = $_POST['konfirpassword'];

            if ($password == $konfirpassword) {
                $loginModel = $this->model('Login_model');
                $result = $loginModel->updatePassword($email, $password,);

                if ($result) {
                    echo 'Gagal mengubah password. Silakan coba lagi.';
                } else {
                    header('Location: http://localhost/PHP-MVC/public/login1');
                }
            } else {
                echo 'Password tidak cocok.';
            }
        }
    }
