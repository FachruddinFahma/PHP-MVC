<?php
class Kamar_user extends Controller
{
    public function kamar($id_kost)
    {
        //$id_kost = $_POST['id'];
        $data['judul'] = 'Kamar User';
        $data['kost'] = $this->model('kamarUser_model')->getAllKost($id_kost);
        $data['kamar'] = $this->model('kamarUser_model')->getAllKamar($id_kost);
        // Ambil data foto pertama saja
        foreach ($data['kamar'] as &$kamar) {
            $foto_kamar = $this->model('kamarUser_model')->getAllFotoKamar($kamar['id_kamar']);
            $kamar['main_foto'] = $foto_kamar['foto_kamar'][0] ?? ''; // Ambil gambar pertama
        }

        $data['foto_kost'] = $this->model('kamarUser_model')->getAllFotoKost($id_kost);
        $this->view('landing_page/kamar', $data);
    }
}
