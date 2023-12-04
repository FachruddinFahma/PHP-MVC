<?php
    class Dashboard extends Controller
    {
        public function index()
        {
            $id_user = $_SESSION['id_user'];
        
            $data['judul'] = 'Dashboard';
            $dashboard_model = $this->model('Dashboard_model');
            $data['total_komplain'] = $dashboard_model->totalKomplainByUserId($id_user);
            $data['total_penghuni'] = $dashboard_model->totalPenghuniByIdUser($id_user);
            $data['total_kamar'] = $dashboard_model->totalKamarByIdUser($id_user);
            $data['total_pendapatan'] = $dashboard_model->totalPendapatanByIdUser($id_user);
            $data['penghuni'] = $dashboard_model->getAllPenghuni($id_user);
            $data['transaksi'] = $dashboard_model->getAllTrank($id_user);
        
            $this->view('templates/header', $data);
            $this->view('pemilik_kost/dashboard/index', $data);
            $this->view('templates/footer');
        }
    }
?>