<?php
class Data_Kost extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Kost';
        //$data['dashboard'] = $this->model('Dashboard_model')->getAllPenghuni();
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/data_kost/index', $data);
        $this->view('templates/footer');
    }
}
