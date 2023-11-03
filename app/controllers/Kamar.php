<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Kamar extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kamar';
        $data['kamar'] = $this->model('Kamar_model')->getAllKamar();
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/kamar/index', $data);
        $this->view('templates/footer');
    }
    public function tambahKamar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id_kamar' => $_POST['id_kamar'],
                'fasilitas_kamar' => $_POST['fasilitas_kamar'],
                'ukuran_kamar' => $_POST['ukuran_kamar'],
                'harga_kamar' => $_POST['harga_kamar'],
            ];

            $added = $this->model('Kamar_model')->addKamar($data);

            if (!$added) {
                echo "terjadi eror";
            }
        }
        $this->index();
    }
}
