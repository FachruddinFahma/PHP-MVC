<?php
    class Detail_kamar extends Controller
    {
        public function index()
        {
            $data['kamar'] = $this->model('detailKamar_model')->getKamarbyIdKamar();
            $this->view('landing_page/detail_kamar', $data);
        }
    }
?>