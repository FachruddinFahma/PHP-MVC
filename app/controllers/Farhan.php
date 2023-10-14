<?php
    class Farhan extends Controller{
        public function index()
        {
            $data['judul'] = 'Farhan';
            $data['farhan'] = $this->model('Farhan_model')->getAllFarhan();
            $this->view('templates/header', $data);
            $this->view('farhan/index', $data);
            $this->view('templates/footer');
        }

        public function addFarhan()
        {
            // Set form enctype for file upload
            $data = $_POST;
            $foto = $_FILES['foto'];

            // Handle file upload
            $fotoName = $this->uploadFoto($foto);

            // Add data to the model
            $data['foto'] = $fotoName;
            if ($this->model('Farhan_model')->addFarhan($data) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: http://localhost/PHP-MVC/public/farhan');
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: http://localhost/PHP-MVC/public/farhan');
                exit;
            }
        }
        // Helper function to handle file upload
        private function uploadFoto($file)
        {
            $namaFile = $file['name'];
            $ukuranFile = $file['size'];
            $error = $file['error'];
            $tmpName = $file['tmp_name'];

            // Check if there is a file uploaded
            if ($error === 4) {
                // No file uploaded
                return "";
            }

            // Generate a unique name for the file
            $namaFileBaru = uniqid() . '-' . $namaFile;

            // Move the uploaded file to the desired folder
            move_uploaded_file($tmpName, 'http://localhost/PHP-MVC/public/image' . $namaFileBaru);

            return $namaFileBaru;
        }

        public function getIdPenghuni($id_Penghuni)
        {
            $data['judul'] = "Edit Penghuni";
            $data['penghuni'] = $this->model('Farhan_model')->getPenghuniById($id_Penghuni);
            $this->view('templates/header', $data);
            $this->view('farhan/edit', $data);
            $this->view('templates/footer');
        }
    }
?>