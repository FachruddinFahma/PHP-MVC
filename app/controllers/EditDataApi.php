
<?php
class EditDataApi extends Controller
{
    public function editUser($idUser)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {                        
        $nama = $_POST['nama'];
        $noHp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $tglLahir = $_POST['tggl_lahir'];

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
