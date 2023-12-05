<?php
    class Pemesanan_kost extends Controller
    {
        public function pemesanan($id_kamar)
        {
            $id_user = $_SESSION['id_user'];
            $data['pemesanan'] = $this->model('pemesananKost_model')->getAll($id_kamar);
            $data['detail_kamar'] = $this->model('pemesananKost_model')->getDetailKamarById($id_kamar);
            $data['penghuni'] = $this->model('pemesananKost_model')->getPenggunaById($id_user);
            $data['idRnamdom'] = $this->model('pemesananKost_model')->generateRandomID();
            $this->view('landing_page/data_pemesanan', $data);
        }

        public function addPemesanan()
        {
            // $id_kamar = $_POST['id_kamar'];
            $id_pemesanan = $_POST['id_pemesanan'];
            if ($this->model('pemesananKost_model')->addPemesanan($_POST, $id_pemesanan) > 0) {
                header('Location: http://localhost/PHP-MVC/public/landing_page/detail_kamar');
            } else {
                header("Location: http://localhost/PHP-MVC/public/Download/mobile_download");
            }
        }
    }    
?>