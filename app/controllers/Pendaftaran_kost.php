<?php
    class Pendaftaran_kost extends Controller{

        public function index(){
            $data['judul'] = 'Pendataran Kost';
            //$data['dashboard'] = $this->model('Dashboard_model')->getAllPenghuni();
            $this->view('pemilik_kost/data_kost/pendaftaran_kost2', $data);
        }

        public function addKost()
        {
            if($this->model('PendaftaranKost_model')->addKost($_POST) > 0){
                header('Location: http://localhost/PHP-MVC/public/dashboard');
            }else{
                header('Location:http://localhost/PHP-MVC/public/pendataran_kost');
            }
        }
    }
?>