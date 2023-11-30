<?php
    class Pembayaran extends Controller
    {
        public function pembayaran()
        {
            $data['foto'] = $this->model('Pembayaran_model')->getFotoQris();
            $this->view('landing_page/pembayaran', $data);
        }
    }
?>