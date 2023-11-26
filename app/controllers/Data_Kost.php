<?php
    class Data_Kost extends Controller
    {

        public function index()
        {
            $id_user = $_SESSION['id_user'];
            $data = $this->model('dataKost_model')->getKostByUserId($id_user);
            // $data = $this->model('dataKost_model')->getKostById($id_user);

            $defaultFormValues = [
                'id_kost' => '',
                'nama_kost' => '',
                'nama_lengkap' => '',
                'jenis_kost' => '',
                'fasilitas_kost' => '',
                'peraturan_kost' => '',
                'jenis_bank' => '',
                'no_rekening' => '',
                'nama_rekening' => '',
                'foto_qris' => '',
                'latitude' => '',
                'longitude' => '',
                'alamat' => '',
                'status' => ''
            ];

            if ($data && $data['status'] === 'AKTIF') {
                $defaultFormValues = [
                    'id_kost' => $data['id_kost'],
                    'nama_kost' => $data['nama_kost'],
                    'nama_lengkap' => $data['nama_lengkap'],
                    'jenis_kost' => $data['jenis_kost'],
                    'fasilitas_kost' => $data['fasilitas_kost'],
                    'peraturan_kost' => $data['peraturan_kost'],
                    'jenis_bank' => $data['jenis_bank'],
                    'no_rekening' => $data['no_rekening'],
                    'nama_rekening' => $data['nama_rekening'],
                    'foto_qris' => $data['foto_qris'],
                    'latitude' => $data['latitude'],
                    'longitude' => $data['longitude'],
                    'alamat' => $data['alamat'],
                    'status' => $data['status']
                ];
            }
            
            $data['judul'] = "KOST";
            $data['kost'] = $defaultFormValues;
            $data['fotos'] = $this->model('dataKost_model')->getfotoKostByUserId($id_user);

            $this->view('templates/header', $data);
            $this->view('pemilik_kost/data_kost/index', $data);
            $this->view('templates/footer');
        }

    
        public function updateKost($id_kost)
        {
            // Ambil data yang diperlukan dari $_POST
            $nama_kost = $_POST['nama_kost'];
            $jenis_kost = $_POST['jenis_kost'];
            $fasilitas_kost = $_POST['fasilitas_kost'];
            $peraturan_kost = $_POST['peraturan_kost'];
            $jenis_bank = $_POST['jenis_bank'];
            $no_rekening = $_POST['no_rekening'];
            $nama_rekening = $_POST['nama_rekening'];
            $foto_qris = $_POST['foto_qris'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $alamat = $_POST['alamat'];

            if ($this->model('dataKost_model')->updateKost($id_kost, $nama_kost, $jenis_kost, $fasilitas_kost, $peraturan_kost, $latitude, $longitude, $alamat, $jenis_bank, $no_rekening, $nama_rekening, $foto_qris) > 0) {
                header('Location: http://localhost/PHP-MVC/public/login1');
            } else {
                header('Location: http://localhost/PHP-MVC/public/data_kost');
                exit;
            }
        }
    }
?>
