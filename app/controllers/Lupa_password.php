<?php
    class Lupa_password extends Controller {

        public function index()
        {
            $data['judul'] = 'Lupa Password';
            $this->view('pemilik_kost/login1/lupa_password', $data);
            $this->view('templates/footer');
        }

    }
