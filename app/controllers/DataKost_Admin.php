<?php
class DataKost_Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'DataKost';
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/data_kost/index', $data);
        $this->view('templatesAdmin/footer');
    }
}
?>