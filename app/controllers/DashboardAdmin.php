<?php
class DashboardAdmin extends Controller
{
    public function index()
    {
        $data['judul'] = 'DashboardAdmin';
        $dashboardAdmin_model = $this->model('DashboardAdmin_model'); 
        $data['total_kost'] = $dashboardAdmin_model->totalKost();
        $data['total_pemilik'] = $dashboardAdmin_model->totalPemilikKost();
        $data['total_penyewa'] = $dashboardAdmin_model->totalPenyewakKost();
        $data['total_testimoni'] = $dashboardAdmin_model->totalTestimoni();
        $data['pengguna'] = $dashboardAdmin_model->getAllPengguna();
        $data['kost'] = $dashboardAdmin_model->getAllKost();
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/dashboardAdmin/index', $data);
        $this->view('templatesAdmin/footer');
    }
}
?>
