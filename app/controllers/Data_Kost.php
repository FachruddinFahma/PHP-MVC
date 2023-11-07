<?php
    class Data_Kost extends Controller
    {
        public function index()
        {
            $id_kost = 'KOST02';
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

        public function updateKost($id_kost)
        {
            // Ambil data yang diperlukan dari $_POST
            $nama_kost = $_POST['nama_kost'];
            $jenis_kost = $_POST['jenis_kost'];
            $fasilitas_kost = $_POST['fasilitas_kost'];
            $peraturan_kost = $_POST['peraturan_kost'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $alamat = $_POST['alamat'];

            if ($this->model('dataKost_model')->updateKost($id_kost, $nama_kost, $jenis_kost, $fasilitas_kost, $peraturan_kost, $latitude, $longitude, $alamat) > 0) {
                header('Location: http://localhost/phpmvc/public/data_kost');
            } else {
                header('Location: http://localhost/phpmvc/public/login1');
                exit;
            }
        }
    }
?>
