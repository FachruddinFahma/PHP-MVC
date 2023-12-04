<?php
class Komplain extends Controller
{
    public function index()
    {
        $id_user = $_SESSION['id_user']; 
        $data['judul'] = 'Komplain';
        $data['komplain'] = $this->model('Komplain_model')->getAllKomplainByIdUser($id_user);
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/komplain/index', $data);
        $this->view('templates/footer');
    }
}
