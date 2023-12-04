    <?php

    class Download extends Controller
    {
        public function index()
        {
            $this->view('landing_page/mobile_download');
        }

        public function tambahTesti(){
            $dataTesti = [
                'id_user' => $_SESSION['id_user'],
                'deskripsi_testi' => $_POST['deskripsi_testi'],
            ];
            if ($this->model('Download_model')->addTesti($dataTesti) >= 0) {
                $_SESSION['showModal'] = false;
                header('Location: http://localhost/PHP-MVC/public/download');
            } else {
                echo "gagal";
            }
        }
    }