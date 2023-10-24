<?php
class Pemesanan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pemesanan';
        //$data['dashboard'] = $this->model('Dashboard_model')->getAllPenghuni();
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/pemesanan/index', $data);
        $this->view('templates/footer');
    }
}
