<?php
    class Dashboard extends Controller
    {
        public function index()
        {
            $id_user = $_SESSION['id_user'];
        
            $data['judul'] = 'Dashboard';
            $dashboard_model = $this->model('Dashboard_model');
            $data['total_komplain'] = $dashboard_model->totalKomplain();
            $data['total_penghuni'] = $dashboard_model->totalPenghuniByIdUser($id_user);
            $data['total_kamar'] = $dashboard_model->totalKamarForUser($id_user); // Corrected method name
        
            $this->view('templates/header', $data);
            $this->view('pemilik_kost/dashboard/index', $data);
            $this->view('templates/footer');
        }
    }
?>