<?php
    class Farhan extends Controller{
        public function index()
        {
            $data['judul'] = 'Farhan';
            $data['penghuni'] = $this->model('Penghuni_model')->getAllPenghuni();
            $this->view('templates/header', $data);
            $this->view('farhan/index', $data);
            $this->view('templates/footer');
        }
    }
?>