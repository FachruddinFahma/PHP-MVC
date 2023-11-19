<?php
class Laporan extends Controller
{
    public function index()
    {
        $id_user = $_SESSION['id_user'];
        $data['judul'] = 'Laporan';
        $data['laporan'] = $this->model('Laporan_model')->getAllLaporan($id_user);
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/laporan/index', $data);
        $this->view('templates/footer');
    }

    public function cariByTanggal()
    { 

        $id_user = $_SESSION['id_user'];
        $tanggal_awal = $_POST['tanggal_awal'];
        $tanggal_akhir = $_POST['tanggal_akhir'];

        $data['judul'] = 'Laporan';
        $data['laporan'] = $this->model('Laporan_model')->searchByDate($id_user, $tanggal_awal, $tanggal_akhir);
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/laporan/index', $data);
        $this->view('templates/footer');
    }
    
}

