
<?php
class EditDataApi extends Controller
{
    public function editUser($idUser)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
            $putData = file_get_contents('php://input');
            $data = json_decode($putData, true);

            $nama = $data['nama_lengkap'];
            $noHp = $data['no_hp'];
            $alamat = $data['alamat'];
            $jk = $data['jenis_kelamin'];
            $tglLahir = $data['tggl_lahir'];

            $edit_user_model = $this->model('EditDataApi_model');
            $success = $edit_user_model->updateUser($nama, $noHp, $alamat, $jk, $tglLahir, $idUser);

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
