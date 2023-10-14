<?php
class Fahma extends Controller{
        public function index()
        {
            $data['judul'] = 'Fahma';
            $data['Fahma'] = $this->model('Fahma_model')->getAllPenghuni();
            $this->view('templates/header', $data);
            $this->view('Fahma/Fahma', $data);
            $this->view('templates/footer');
        }

        public function addFahma()
        {
            $data = $_POST;
            $foto = $_FILES['foto'];

            // Handle file upload
            $fotoName = $this->uploadFoto($foto);

            // Add data to the model
            $data['foto'] = $fotoName;
            if ($this->model('Penghuni_model')->addPenghuni($data) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: http://localhost/PHP-MVC/public/Fahma');
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: http://localhost/PHP-MVC/public/Fahma');
                exit;
            }    
        }
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
            move_uploaded_file($tmpName, 'path/to/your/upload/folder/' . $namaFileBaru);

            return $namaFileBaru;
        }

        public function getIdPenghuni($id_Penghuni)
        {
            $data['judul'] = "Edit Penghuni";
            $data['penghuni'] = $this->model('Farhan_model')->getPenghuniById($id_Penghuni);
            $this->view('templates/header', $data);
            $this->view('fahma/edit', $data);
            $this->view('templates/footer');
        }
    }
?>