<?php
    class Pendaftaran_kost extends Controller{

        public function index(){
            $data['judul'] = 'Pendataran Kost';
            //$data['dashboard'] = $this->model('Dashboard_model')->getAllPenghuni();
            $this->view('pemilik_kost/data_kost/pendaftaran_kost', $data);
        }
    }
?>