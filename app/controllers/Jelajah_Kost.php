<?php
class Jelajah_Kost extends Controller
{
    public function jelajah()
    {
        $data['judul'] = 'Jelajah';
        $data['jelajah'] = $this->model('jelajahKost_model')->getAllKost();

        // Ambil data foto pertama saja
        foreach ($data['jelajah'] as &$kost) {
            $foto_kost = $this->model('jelajahKost_model')->getAllFotoKostt($kost['id_kost']);
            $kost['main_foto'] = $foto_kost['foto_kamar'][0] ?? ''; // Ambil gambar pertama
        }

        $this->view('landing_page/jelajah', $data);
    }
}
