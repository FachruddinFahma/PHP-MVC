
<?php
class EditDataApi extends Controller
{
    public function editUser($idUser)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
            $putData = file_get_contents('php://input');
            $data = json_decode($putData, true);

            $nama = $data['nama_lengkap'];
            $foto = $data['foto_user'];
            $noHp = $data['no_hp'];
            $alamat = $data['alamat'];
            $jk = $data['jenis_kelamin'];
            $tglLahir = $data['tggl_lahir'];

            $edit_user_model = $this->model('EditDataApi_model');
            $success = $edit_user_model->updateUser($nama, $foto, $noHp, $alamat, $jk, $tglLahir, $idUser);

            if ($success) {
                $response = array(
                    'code' => 200,
                    'status' => 'Update User Sukses',
                );
            } else {
                $response = array(
                    'code' => 400,
                    'status' => 'Gagal mengubah data user',
                );
            }
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Data tidak ditemukan',
            );
        }
        echo json_encode($response);
    }

    public function checkPassword($idUser) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
            $password = $_POST['password'];
            $edit_user_model = $this->model('EditDataApi_model');
    
            $storedPassword = $edit_user_model->getStoredPassword($idUser);
    
            if (password_verify($password, $storedPassword)) {
                $response = array(
                    'code' => 200,
                    'status' => 'Password benar',
                );
            } else {
                $response = array(
                    'code' => 400,
                    'status' => 'Password salah',
                );
            }
    
            echo json_encode($response);
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Metode request tidak diizinkan',
            );
            echo json_encode($response);
        }
    }
    
    
    public function editPass($idUser){
        if ($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['password']) && !empty($_POST['password'])) {
                
                $password = $_POST['password'];
                $edit_user_model = $this->model('EditDataApi_model');
    
                $success = $edit_user_model->updatePassword($password, $idUser);
    
                if ($success) {
                    $response = array(
                        'code' => 200,
                        'status' => 'Update Kata Sandi Sukses',
                    );
                } else {
                    $response = array(
                        'code' => 400,
                        'status' => 'Gagal mengubah kata sandi',
                    );
                }
            } else {
                $response = array(
                    'code' => 400,
                    'status' => 'Data password tidak ditemukan atau kosong',
                );
            }
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Metode request tidak diizinkan',
            );
        }
        echo json_encode($response);
    }
    
}
