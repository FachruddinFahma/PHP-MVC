<?php
    class Login1 extends Controller {

        public function index()
        {
            $data['judul'] = 'login1';
            $this->view('pemilik_kost/login1/login1', $data);
            $this->view('templates/footer');
        }
        public function cekLogin(){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $data['login1'] = $this->model('Login_model')->prosesLogin($email,$password);
            
            
                var_dump($data);
                if($data['login1'] == NULL){
                    header("Location: http://localhost/PHP-MVC/public/login1");
                }else{
                    foreach($data ['login1'] as $row);
                    $_SESSION['email'] = $row ['email'];
                      
                
                $ambil_id_role = $data["login1"]["id_role"];
                    echo $ambil_id_role;
                
                    if ($ambil_id_role == 1) {
                        header('Location: http://localhost/PHP-MVC/public/dashboard');
                    } elseif ($ambil_id_role == 2) {
                        header('Location: http://localhost/PHP-MVC/public/login');
                    } elseif ($ambil_id_role == 3) {
                        header('Location: http://localhost/PHP-MVC/public/penghuni');
                    }else {
                        echo'Login gagal. Silakan coba lagi';
                        }
                        }
                    }               
    }
?>