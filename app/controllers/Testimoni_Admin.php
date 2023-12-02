<?php
class Testimoni_Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Testimoni';
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/testmoni/index', $data);
        $this->view('templatesAdmin/footer');
    }
}
?>