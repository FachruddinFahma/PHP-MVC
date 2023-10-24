<?php
class Komplain extends Controller
{
    public function index()
    {
        $data['judul'] = 'Komplain';
        //$data['dashboard'] = $this->model('Dashboard_model')->getAllPenghuni();
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/komplain/index', $data);
        $this->view('templates/footer');
    }
}
