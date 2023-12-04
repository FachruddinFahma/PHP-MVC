<?php
    class Profile_admin extends Controller
    {
        public function index()
        {
            $data['judul'] = 'Profile';
            $this->view('templatesAdmin/header', $data);
            $this->view('admin/profileAdmin/index', $data);
            $this->view('templatesAdmin/footer', $data);
        }
    }