<?php
class DataUser_Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'DataUser';
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/data_user/index', $data);
        $this->view('templatesAdmin/footer');
    }
}
?>