<?php

class Signup extends Controller
{
    public function index()
    {
        $data['title'] = 'Todo - Signup';
        $data['year'] = date('Y');
        $data['url'] = $_REQUEST['url'] ?? 'signup';
        
        $path = $_SERVER['REQUEST_URI'];

        if (strpos($path, 'taks') !== false || strpos($path, 'dashboard') !== false) {
            $data['class'] = 'd-none';
        } else {
            $data['class'] = 'footer_right-content col-md-3 col-sm-12 justify-content-end';
        }

        $this->view('layout/header', $data);
        $this->view('layout/navbar', $data);
        $this->view('auth/signup');
        $this->view('layout/footer', $data);
    }
}