<?php
    class Login1 extends Controller {

        public function index()
        {
            $data['judul'] = 'Login';
            $this->view('pemilik_kost/login1/login1', $data);
            $this->view('templates/footer');
        }
    }
?>