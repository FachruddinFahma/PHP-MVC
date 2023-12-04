<?php
    class DataKost_Admin extends Controller
    {
        public function index()
        {
            $data['judul'] = 'DataKost';
            $data['kostMasuk'] = $this->model('dataKostAdmin_model')->getKostMasuk();
            $data['kostTerkonfirmasi'] = $this->model('dataKostAdmin_model')->getKostTerkonfirmasi();
            $this->view('templatesAdmin/header', $data);
            $this->view('admin/data_kost/index', $data);
            $this->view('templatesAdmin/footer');
        }

        public function terima($id_kost)
        {
            $model = $this->model('dataKostAdmin_Model');
            $model->terimaKost($id_kost);

            header("Location: /PHP-MVC/public//index");
            exit();
        }

        public function tolak($id_kost)
        {
            $model = $this->model('dataKostAdmin_Model');
            $model->tolakKost($id_kost);

            header("Location: /PHP-MVC/public/pemesanan/index");
            exit();
        }
    }    
?>