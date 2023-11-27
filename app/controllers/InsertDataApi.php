<?php

class InsertDataApi extends Controller{
    public function insertKomplain($idUser){
        $insertModel = $this->model('InsertDataApi_model');

        // Mendapatkan data dari request atau input
        $id_komplain = $_POST['id_komplain'] ?? '';
        // $id_user = $_POST['id_user'] ?? '';
        $jenis_komplain = $_POST['jenis_komplain'] ?? '';
        $tipe_komplain = $_POST['tipe_komplain'] ?? '';
        $deskripsi_komplain = $_POST['deskripsi_komplain'] ?? '';
        $tggl_komplain = $_POST['tggl_komplain'] ?? '';

        // Memanggil fungsi addKomplain() dari model dan menyimpan hasilnya
        $result = $insertModel->addKomplain($id_komplain, $idUser, $jenis_komplain, $tipe_komplain, $deskripsi_komplain, $tggl_komplain);

        // Mengirimkan respon sesuai dengan hasil operasi insert
        if ($result) {
            // Berhasil memasukkan data komplain
            // Kirim respon success
            echo json_encode(array('message' => 'Data komplain berhasil ditambahkan'));
        } else {
            // Gagal memasukkan data komplain
            // Kirim respon error
            echo json_encode(array('message' => 'Gagal menambahkan data komplain'));
        }
    }
}
