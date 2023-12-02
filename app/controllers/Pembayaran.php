<?php
    class Pembayaran extends Controller
    {
        public function pembayaran()
        {
            $id_kamar = $_GET['id_kamar'];
            $id_pemesanan = $_GET['id_pemesanan'];
            $data['foto'] = $this->model('Pembayaran_model')->getFotoQris($id_kamar, $id_pemesanan);
            $this->view('landing_page/pembayaran', $data);
        }
    }
?>