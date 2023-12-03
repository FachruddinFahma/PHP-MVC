<?php
class Jelajah_Kost extends Controller
{
    public function jelajah()
    {
        $data['judul'] = 'Jelajah';
        $data['jelajah'] = $this->model('jelajahKost_model')->getAllKost();

        foreach ($data['jelajah'] as &$kost) {
            $foto_kost = $this->model('jelajahKost_model')->getAllFotoKostt($kost['id_kost']);
            $kost['main_foto'] = $foto_kost['foto_kamar'][0] ?? ''; 
        }
        $this->view('landing_page/jelajah', $data);
    }
    public function searchKost()
    {
        $data['jelajah'] = $this->model('jelajahKost_model')->getAllKost();

        $this->view('landing_page/jelajah', $data);
    }
}