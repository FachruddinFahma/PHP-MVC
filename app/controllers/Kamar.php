<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Kamar extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kamar';
        $data['kamar'] = $this->model('Kamar_model')->getAllKamar();
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/kamar/index', $data);
        $this->view('templates/footer');
    }

    public function tambahKamar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id_kamar' => $_POST['id_kamar'],
                'fasilitas_kamar' => $_POST['fasilitas_kamar'],
                'ukuran_kamar' => $_POST['ukuran_kamar'],
                'harga_kamar' => $_POST['harga_kamar'],
            ];

            $added = $this->model('Kamar_model')->insertKamar($data);

            if (!$added) {
                echo "terjadi eror";
            }
        }
        $this->index();
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
