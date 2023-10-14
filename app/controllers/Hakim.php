<?php

class Hakim extends Controller
{

    public function index()
    {
        $data['judul'] = 'Hakim';
        $data['Hakim'] = $this->model('Hakim_model')->getAllHakim();
        $this->view('templates/header', $data);
        $this->view('Hakim/index', $data);
        $this->view('templates/footer');
    }
}
