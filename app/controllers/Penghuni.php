<?php
class Penghuni extends Controller
{
    public function index()
    {
        $id_user = $_SESSION['id_user']; 
        $data['judul'] = 'Penghuni';
        $data['penghuni'] = $this->model('Penghuni_model')->getAllPenghuniByUserId($id_user);
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/penghuni/index', $data);
        $this->view('templates/footer');
    }

    public function deletePenghuni($id_user)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->model('Penghuni_model')->deletePenghuni($id_user) > 0) {
                Flasher::setFlash('berhasil', 'dihapus', 'success');
            } else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
            }
        }
        header('Location: http://localhost/PHP-MVC/public/penghuni');
        exit;
    }

    // public function editPenghuni($id_Penghuni)
    // {
    //     $data['judul'] = "Edit Penghuni";
    //     $data['penghuni'] = $this->model('Penghuni_model')->getPenghuniById($id_Penghuni);
    //     $this->view('templates/header', $data);
    //     $this->view('penghuni/editPenghuni', $data);
    //     $this->view('templates/footer');
    // }


    // public function addPenghuni()
    // {
    //     if($this->model('Penghuni_model')->addPenghuni($_POST) > 0){
    //         Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //         header('Location:http://localhost/phpmvc/public/penghuni');
    //     }else{
    //         Flasher::setFlash('gagal', 'ditambahkan', 'danger');
    //         header('Location:http://localhost/phpmvc/public/penghuni');
    //         exit;
    //     }
    // }
    // public function addPenghuni()
    // {
    //     // Set form enctype for file upload
    //     $data = $_POST;
    //     $foto = $_FILES['foto'];

    //     // Handle file upload
    //     $fotoName = $this->uploadFoto($foto);

    //     // Add data to the model
    //     $data['foto'] = $fotoName;
    //     if ($this->model('Penghuni_model')->addPenghuni($data) > 0) {
    //         Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //         header('Location: http://localhost/phpmvc/public/penghuni');
    //     } else {
    //         Flasher::setFlash('gagal', 'ditambahkan', 'danger');
    //         header('Location: http://localhost/phpmvc/public/penghuni');
    //         exit;
    //     }
    // }

    // Helper function to handle file upload
    // private function uploadFoto($file)
    // {
    //     $namaFile = $file['name'];
    //     $ukuranFile = $file['size'];
    //     $error = $file['error'];
    //     $tmpName = $file['tmp_name'];

        // Check if there is a file uploaded
        // if ($error === 4) {
            // No file uploaded
        //     return "";
        // }

        // Generate a unique name for the file
        // $namaFileBaru = uniqid() . '-' . $namaFile;

        // Move the uploaded file to the desired folder
        // move_uploaded_file($tmpName, '/public/image/' . $namaFileBaru);

    //     return $namaFileBaru;
    // }

    // public function updatePenghuni($id_Penghuni)
    // {
        // Ambil data yang diperlukan dari $_POST
    //     $nama_penghuni = $_POST['nama_penghuni'];
    //     $alamat = $_POST['alamat'];

    //     if ($this->model('Penghuni_model')->updatePenghuni($id_Penghuni, $nama_penghuni, $alamat) > 0) {
    //         Flasher::setFlash('berhasil', 'diedit', 'success');
    //         header('Location:http://localhost/phpmvc/public/penghuni');
    //     } else {
    //         Flasher::setFlash('gagal', 'diedit  ', 'danger');
    //         header('Location:http://localhost/phpmvc/public/penghuni');
    //         exit;
    //     }
    // }
}
