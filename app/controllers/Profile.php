<?php
class Profile extends Controller
{
    public function index()
    {
        $data['judul'] = 'Profile';
         $data['profile'] = $this->model('Profile_Model')->getProfile("PGHOO1");
        //$data['dashboard'] = $this->model('Dashboard_model')->getAllPenghuni();
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/profile/index', $data);
        $this->view('templates/footer');
    }
}
