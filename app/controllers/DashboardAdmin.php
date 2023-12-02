<?php
class DashboardAdmin extends Controller
{
    public function index()
    {
        $data['judul'] = 'DashboardAdmin';
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/dashboardAdmin/index', $data);
        $this->view('templatesAdmin/footer');
    }
}
?>