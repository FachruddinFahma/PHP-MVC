<?php
class Landing_page extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['testimoni'] = $this->model('landingPage_model')->getRecentTesti(3);
        $data['data_kost'] = $this->model('landingPage_model')->getAllKost();
        // Ambil data foto pertama saja
        foreach ($data['data_kost'] as &$kost) {
            $foto_kost = $this->model('landingPage_model')->getAllFotoKostt($kost['id_kost']);
            $kost['main_foto'] = $foto_kost['foto_kamar'][0] ?? ''; // Ambil gambar pertama
        }
        $this->view('landing_page/index', $data);
    }
    
    // public function kamar()
    // {
    //     $data['judul'] = 'Kamar User';
    //     $data['jelajah'] = $this->model('landingPage_model')->getAllKost();
    //     $data['foto_kost'] = $this->model('landingPage_model')->getAllFotoKost();
    //     $this->view('landing_page/kamar', $data);
    // }


    // public function detail_kamar()
    // {
    //     $this->view('landing_page/detail_kamar');
    // }

    // public function pemesanan()
    // {
    //     $this->view('landing_page/data_pemesanan');
    // }

    // public function pembayaran()
    // {
    //     $this->view('landing_page/pembayaran');
    // }
}
