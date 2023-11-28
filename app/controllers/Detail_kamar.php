<?php
    class Detail_kamar extends Controller
    {
        public function index($id_kamar)
        {
            $id_user = $_SESSION['id_user'];
            $data['kamar'] = $this->model('detailKamar_model')->getKamarbyIdKamar($id_kamar);
            $data['penghuni'] = $this->model('pemesananKost_model')->getPenggunaById($id_user);
            $this->view('landing_page/detail_kamar', $data);
        }
    }
?>