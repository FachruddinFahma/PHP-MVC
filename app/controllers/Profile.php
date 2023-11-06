<?php
class Profile extends Controller
{
    public function index()
    {
        $data['judul'] = 'Profile';
        $data['profile'] = $this->model('profile_model')->getProfile("PGHOO1"); // Sesuaikan nama model dengan penulisan yang benar

        $this->view('templates/header', $data);
        $this->view('pemilik_kost/profile/index', $data);
        $this->view('templates/footer');
    }
}

