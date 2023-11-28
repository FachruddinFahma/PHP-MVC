<?php
    class Pemesanan_kost extends Controller
    {
        public function pemesanan($id_kamar)
        {
            // Ambil data pengguna dari sesi
            $id_user = $_SESSION['id_user'];
            $data['pemesanan'] = $this->model('pemesananKost_model')->getAll($id_kamar);
            $data['detail_kamar'] = $this->model('pemesananKost_model')->getDetailKamarById();
            $data['penghuni'] = $this->model('pemesananKost_model')->getPenggunaById($id_user);
            $this->view('landing_page/data_pemesanan', $data);
        }
    }
?>