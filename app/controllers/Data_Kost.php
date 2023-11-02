<?php
    class Data_Kost extends Controller
    {
        public function index()
        {
            $id_kost = 'KOST01';
            $data['judul'] = "KOST";
            $data['kost'] = $this->model('dataKost_model')->getKostById($id_kost);
            $data['fotos'] = $this->model('dataKost_model')->getfotKostById($id_kost);

            if ($data['fotos']) {
                $this->view('templates/header', $data);
                $this->view('pemilik_kost/data_kost/index', $data);
                $this->view('templates/footer');
            } else {
                echo "Tidak ada foto yang ditemukan.";
            }
        }
    }
?>
