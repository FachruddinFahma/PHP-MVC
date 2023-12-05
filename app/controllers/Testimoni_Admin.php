<?php
class Testimoni_Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Testimoni';
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/testimoni/index', $data);
        $this->view('templatesAdmin/footer');
    }
}
?>