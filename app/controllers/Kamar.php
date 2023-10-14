<?php
class Kamar extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kamar';
        $data['kamar'] = $this->model('Kamar_model')->getAllKamar();
        $this->view('templates/header', $data);
        $this->view('kamar/index', $data);
        $this->view('templates/footer');
    }
    public function editKamar($id_Penghuni)
    {
        $data['judul'] = "Edit Penghuni";
        $data['penghuni'] = $this->model('Kamar_model')->getPenghuniById($id_Penghuni);
        $this->view('templates/header', $data);
        $this->view('kamar/editKamar', $data);
        $this->view('templates/footer');
    }
    public function addKamar()
    {
        $data = $_POST;

        if ($this->model('Kamar_model')->addKamar($data) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: http://localhost/phpmvc/public/kamar');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: http://localhost/phpmvc/public/kamar');
            exit;
        }
    }
}
