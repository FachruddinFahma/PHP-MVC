<?php
class Pemesanan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pemesanan';
        $data['pemesanan'] = $this->model('Penghuni_model')->getAllPenghuniByUserId();
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/pemesanan/index', $data);
        $this->view('templates/footer');
    }
}
