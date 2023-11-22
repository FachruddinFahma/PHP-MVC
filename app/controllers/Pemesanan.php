<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Pemesanan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pemesanan';
        $model = $this->model('Pemesanan_Model');

        $data['pemesananMasuk'] = $model->getPemesananMasuk();
        $data['pemesananTerkonfirmasi'] = $model->getPemesananTerkonfirmasi();

        $this->view('templates/header', $data);
        $this->view('pemilik_kost/pemesanan/index', $data);
        $this->view('templates/footer');
    }
}
