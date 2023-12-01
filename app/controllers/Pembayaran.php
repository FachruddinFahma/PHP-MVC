<?php
    class Pembayaran extends Controller
    {
        public function pembayaran()
        {
            $id_kamar = 'KMR004';
            $data['id_kamar'] = $id_kamar;
            $data['foto'] = $this->model('Pembayaran_model')->getFotoQris($id_kamar);
            $this->view('landing_page/pembayaran', $data);
        }
    }
?>