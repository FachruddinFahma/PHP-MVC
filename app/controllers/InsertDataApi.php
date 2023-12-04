<?php

class InsertDataApi extends Controller
{

    public function insertKomplain($idUser)
    {
        $insertModel = $this->model('InsertDataApi_model');

        $id_komplain = $_POST['id_komplain'] ?? '';
        $id_kamar = $_POST['id_kamar'] ?? '';
        $jenis_komplain = $_POST['jenis_komplain'] ?? '';
        $tipe_komplain = $_POST['tipe_komplain'] ?? '';
        $deskripsi_komplain = $_POST['deskripsi_komplain'] ?? '';
        $tggl_komplain = $_POST['tggl_komplain'] ?? '';

        $result = $insertModel->addKomplain($id_komplain, $idUser, $id_kamar, $jenis_komplain, $tipe_komplain, $deskripsi_komplain, $tggl_komplain);

        if ($result) {
            echo json_encode(array('message' => 'Data komplain berhasil ditambahkan'));
        } else {
            echo json_encode(array('message' => 'Gagal menambahkan data komplain'));
        }
    }
}
