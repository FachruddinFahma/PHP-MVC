<?php
class Laporan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Laporan';
        //$data['dashboard'] = $this->model('Dashboard_model')->getAllPenghuni();
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/laporan/index', $data);
        $this->view('templates/footer');
    }
}
