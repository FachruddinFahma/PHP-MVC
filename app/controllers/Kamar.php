<?php
class Kamar extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kamar';
        //$data['dashboard'] = $this->model('Dashboard_model')->getAllPenghuni();
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/kamar/index', $data);
        $this->view('templates/footer');
    }
}
