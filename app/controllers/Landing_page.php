<?php
class Landing_page extends Controller
{
    public function index()
    {
        $this->view('landing_page/index');
    }

    public function jelajah()
    {
        $this->view('landing_page/jelajah');
    }
}
