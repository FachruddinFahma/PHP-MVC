<?php
class Penghuni extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['dashboard'] = $this->model('Dashboard_model')->getAllPenghuni();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}
