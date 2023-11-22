<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Kamar extends Controller
{
    public function index()
    {
        $id_kost = $this->model('dataKost_model')->getKostByUserId($_SESSION['id_user'])['id_kost'];
        $data['judul'] = 'Kamar';
        $data['kamar'] = $this->model('Kamar_model')->getAllKamar($id_kost);
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/kamar/index', $data);
        $this->view('templates/footer');
    }

    // public function addKamar()
    // {
    //     // var_dump($_POST);
    //     // die();
    //     $data = [
    //         'id_kamar' => $_POST['id_kamar'],
    //         'fasilitas' => $_POST['fasilitas'],
    //         'kategori' => $_POST['kategori'],
    //         'ukuran' => $_POST['ukuran'],
    //         'harga_harian' => $_POST['harga_harian'],
    //         'harga_bulan' => $_POST['harga_bulan'],
    //         'harga_3bulan' => $_POST['harga_3bulan'],
    //         'harga_tahun' => $_POST['harga_tahun'],
    //         'id_kost' => $_POST['id_kost']
    //     ];

    //     if ($this->model('kamar_model')->insertKamar($data)) {
    //         header('Location: http://localhost/PHP-MVC/public/dashboard');
    //     } else {
    //         header('Location: http://localhost/PHP-MVC/public/kamar');
    //     }
    // }

    // controller
    public function addKamar()
    {
        // Ambil id_kost dari data yang sudah login
        $id_kost = $this->model('dataKost_model')->getKostByUserId($_SESSION['id_user'])['id_kost'];

        // Set data kamar yang akan ditambahkan
        $dataKamar = [
            'nama_kamar' => $_POST['nama_kamar'],
            'fasilitas' => $_POST['fasilitas'],
            'kategori' => $_POST['kategori'],
            'ukuran' => $_POST['ukuran'],
            'harga_harian' => $_POST['harga_harian'],
            'harga_bulanan' => $_POST['harga_bulanan'],
            'harga_3bulan' => $_POST['harga_3bulan'],
            'harga_tahunan' => $_POST['harga_tahunan']
        ];

        if ($this->model('Kamar_model')->addKamar($dataKamar, $id_kost) > 0) {
            header('Location: http://localhost/PHP-MVC/public/kamar');
        } else {
            header('Location: http://localhost/PHP-MVC/public/dashboard');
        }
    }

    public function hapusKamar()
    {
        if (isset($_GET['id_kamar'])) {
            $id_kamar = $_GET['id_kamar'];

            echo "ID to delete: $id_kamar";

            $deleted = $this->model('Kamar_model')->deleteKamar($id_kamar);

            if ($deleted) {
                echo "Record deleted successfully.";
            } else {
                echo "Failed to delete record.";
            }
        } else {
            echo "Parameter not found.";
        }
        $this->index();
    }
}
