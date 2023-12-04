<?php
class DataUser_Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'DataUser';
        $data['DataPenyewa_Admin'] = $this->model('DataUser_model')->getDataPenyewa();
        $data['DataPemilik_Admin'] = $this->model('DataUser_model')->getDataPemilik();
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/data_user/index', $data);
        $this->view('templatesAdmin/footer');
    }
}
?>