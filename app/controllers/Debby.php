<?php 
    class Debby extends Controller{
        public function index()
        {
            $data['judul'] = 'Debby';
            $data['debby'] =$this ->model('debby_model') ->getAllPenghuni();
            $this->view('templates/header', $data);
            $this->view('debby/index', $data);
            $this->view('templates/footer');
        }
    }