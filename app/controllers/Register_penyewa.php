<?php
    class Register_penyewa extends Controller {

        public function index()
        {
            $data['judul'] = 'Penyewa Kost';
            $this->view('pemilik_kost/register/register_penyewa', $data);
            $this->view('templates/footer');
        }

        public function tambah_akun_penyewa(){
            $nama_lengkap = $_POST['nama_lengkap'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $konfirpassword = $_POST['konfirpassword'];
            //foto_user
            if($password == $konfirpassword){
                $isidata =[
                    'nama_lengkap'=> $nama_lengkap,
                    'email'=> $email,
                    'password'=> $password,
                ];
                try {
                    $data['Penyewa Kost'] = $this->model('Register_model')->addRegisterPenyewa($isidata);
                    echo 'berhasil';
                    header('Location: http://localhost/PHP-MVC/public/login1');
                } catch (\Throwable $th) {
                    //throw $th;
                    echo 'gagal'. $th ->getMessage();
                }
        }else{
            echo 'password tidak sama' ;
        }
    }
}
    // public function prosesRegister()
    // {
    //     // Ambil data yang diperlukan dari $_POST
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];

    //     // Validasi data registrasi
    //     if (empty($username) || empty($password)) {
    //         echo "<h3> isi data dengan lengkap</h3>";
    //         header('Location: http://localhost/phpmvc/public/register');
    //         exit;
    //     }

    //     // Hash password sebelum menyimpannya ke database
    //     // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    //     // Panggil model untuk menyimpan data registrasi ke database
    //     $registerModel = $this->model('Register_model');
    //     if ($registerModel->registerUser($username, $password)) {
    //         header('Location: http://localhost/phpmvc/public/login');
    //         exit;
    //     } else {
    //         header('Location: http://localhost/phpmvc/public/register');
    //         exit;
    //     }
    // }



// public function prosesRegister()
// {
//     // Ambil data yang diperlukan dari $_POST
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     // Validasi data registrasi
//     if (empty($username) || empty($password)) {
//         // Perbaiki validasi untuk mengarahkan kembali ke halaman registrasi
//         header('Location: http://localhost/phpmvc/public/register');
//         exit;
//     }

//     // Panggil model untuk menyimpan data registrasi ke database
//     $registerModel = $this->model('Register_model');
    
//     // Hash password sebelum menyimpannya ke database
//     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
//     // Data yang akan disimpan ke dalam model
//     $data = [
//         'username' => $username,
//         'password' => $hashedPassword
//     ];

//     if ($registerModel->registerUser($data)) {
//         // Setelah registrasi berhasil, arahkan pengguna ke halaman login
//         header('Location: http://localhost/phpmvc/public/login');
//         exit;
//     } else {
//         header('Location: http://localhost/phpmvc/public/register');
//         exit;
//     }
// }
