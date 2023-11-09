<?php
    class Register_pemilik extends Controller {

        public function index()
        {
            $data['judul'] = 'Pemilik Kost';
            $this->view('pemilik_kost/register/register_pemilik', $data);
            $this->view('templates/footer');
        }

        public function tambah_akun_pemilik()
        {
            // Ambil data dari formulir
            $nama_lengkap = $_POST['nama_lengkap'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $konfirpassword = $_POST['konfirpassword'];

            // Ambil informasi file gambar yang diunggah
            $namaFile = $_FILES['foto_user']['name'];
            $error = $_FILES['foto_user']['error'];
            $tmpName = $_FILES['foto_user']['tmp_name'];

            // Tentukan direktori penyimpanan gambar
            $direktori = '../public/foto/' . $namaFile;

            // Validasi password dan proses upload gambar
            if ($password == $konfirpassword) {
                if ($error === 0) {
                    if (move_uploaded_file($tmpName, $direktori)) {
                        // File gambar berhasil diunggah, lanjutkan dengan penyimpanan data ke database
                        $dataisi = [
                            'nama_lengkap' => $nama_lengkap,
                            'email' => $email,
                            'password' => $password,
                            'foto_user' => $namaFile // Simpan path gambar ke database
                        ];

                        try {
                            // Panggil model untuk menyimpan data ke database
                            $data['Pemilik_Kost'] = $this->model('Register_model')->addRegisterPemilik($dataisi);

                            echo 'sukses';
                            header('Location: http://localhost/PHP-MVC/public/login1');
                        } catch (\Throwable $th) {
                            echo 'gagal' . $th->getMessage();
                        }
                    } else {
                        echo 'Gagal mengunggah file gambar.';
                    }
                } else {
                    echo 'Error saat mengunggah file gambar.';
                }
            } else {
                echo 'Password tidak cocok.';
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
