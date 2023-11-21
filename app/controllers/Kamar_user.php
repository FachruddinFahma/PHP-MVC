<?php
    class Kamar_user extends Controller
    {
        public function kamar()
        {
            $data['judul'] = 'Kamar User';
            $data['jelajah'] = $this->model('landingPage_model')->getAllKost();
            $data['foto_kost'] = $this->model('landingPage_model')->getAllFotoKost();
            $this->view('landing_page/kamar', $data);
        }
    }
?>