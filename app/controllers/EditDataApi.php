
<?php
class EditUserApi extends Controller
{
    public function editUser()
    {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {                        
            $idUser = $_POST['id_user'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $noHp = $_POST['no_hp'];
            $password = $_POST['password'];
            $alamat = $_POST['alamat'];

            

            $edit_user_model = $this->model('EditUser_model_api');
            $success = $edit_user_model->updateUser($idUser, $nama, $email, $noHp, $password, $alamat);

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
}
