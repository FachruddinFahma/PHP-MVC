<?php
class Landing_page extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['data_kost'] = $this->model('landingPage_model')->getAllKost();
        // $data['foto_kost'] = $this->model('landingPage_model')->getAllFotoKost();
        $this->view('landing_page/index', $data);
    }

    public function jelajah()
    {
        $data['judul'] = 'Jelajah';
        $data['jelajah'] = $this->model('landingPage_model')->getAllKost();
        // $data['foto_kost'] = $this->model('landingPage_model')->getAllFotoKost();
        $this->view('landing_page/jelajah', $data);
    }

    // public function kamar()
    // {
    //     $data['judul'] = 'Kamar User';
    //     $data['jelajah'] = $this->model('landingPage_model')->getAllKost();
    //     $data['foto_kost'] = $this->model('landingPage_model')->getAllFotoKost();
    //     $this->view('landing_page/kamar', $data);
    // }


    public function detail_kamar()
    {
        $this->view('landing_page/detail_kamar');
    }

    public function pemesanan()
    {
        $this->view('landing_page/data_pemesanan');
    }

    public function pembayaran()
    {
        $this->view('landing_page/pembayaran');
    }
}
