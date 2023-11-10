<?php
class Landing_page extends Controller
{
    public function index()
    {
        $this->view('landing_page/index');
    }

    public function jelajah()
    {
        $this->view('landing_page/jelajah');
    }

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
