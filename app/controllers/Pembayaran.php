<?php
    class Pembayaran extends Controller
    {
        public function pembayaran()
        {
            // $id_kamar = $_GET['id_kamar'];
            // $id_pemesanan = $_GET['id_pemesanan'];
            $data['foto'] = $this->model('Pembayaran_model')->getFotoQris('KOST01');
            $this->view('landing_page/pembayaran', $data);
        }

        public function addBuktiTF()
        {
            if($this->model('Pembayaran_model')->addKost($_POST) > 0){
                header('Location: http://localhost/PHP-MVC/public/landing_page/index');
            }else{
                header('Location: http://localhost/PHP-MVC/public/landing_page/pembayaran');
            }
        }
    }
?>