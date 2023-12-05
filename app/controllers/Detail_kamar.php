<?php
    class Detail_kamar extends Controller
    {
        public function index($id_kamar)
        {
            $data['kamar'] = $this->model('detailKamar_model')->getKamarbyIdKamar($id_kamar);
            // $data['penghuni'] = $this->model('pemesananKost_model')->getPenggunaById($id_user);
            $data['foto_kamar'] = $this->model('detailKamar_model')->getAllFotoKamar($id_kamar);
            $this->view('landing_page/detail_kamar', $data);
        }

        public function toPemesanan(){
            $id_kamar = $_POST['input-id-kamar'];
            $pilihan_harga = $_POST['pilihan-harga'];
            $harga = $_POST['harga-input'];
            $_SESSION['id_kamar'] = $id_kamar;
            $_SESSION['pilihan_harga'] = $pilihan_harga;
            $_SESSION['harga'] = $harga;
            $base_url = BASEURL . 'pemesanan_kost/pemesanan/'. $id_kamar;
            header("Location: $base_url");
        }

    }
?>