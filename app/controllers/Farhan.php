<?php
    class Farhan extends Controller{
        public function index()
        {
            $data['judul'] = 'Farhan';
            $data['farhan'] = $this->model('Farhan_model')->getAllFarhan();
            $this->view('templates/header', $data);
            $this->view('farhan/index', $data);
            $this->view('templates/footer');
        }
    }
?>