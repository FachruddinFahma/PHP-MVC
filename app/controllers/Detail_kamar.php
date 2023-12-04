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
    }
?>