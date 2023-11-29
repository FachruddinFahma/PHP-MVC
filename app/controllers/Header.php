<?php
session_start();

    class Header extends Controller
    {
        public function index()
        {
            if (isset($_SESSION['id_user'])) {
                $id_user = $_SESSION['id_user'];
                echo $id_user;
                $data['profile'] = $this->model('Header_model')->getProfile($id_user);
            } else {
                $data['profile'] = null;
                header('Location: http://localhost/PHP-MVC/public/login');
            }
            $this->view('templates/header', $data);
            $this->view('templates/footer');
        }
    }
?>
