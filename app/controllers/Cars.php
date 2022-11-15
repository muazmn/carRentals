<?php

class Cars extends Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Kereta';
        $data['cars'] = $this->model('Cars_model')->getAllKereta();
        $this->view('templates/header', $data);
        $this->view('cars/index', $data);
        $this->view('templates/footer');
    }
    public function details()
    {
        $data['judul'] = 'Halaman Profile';
        // $data['cars'] = $this->model('Profile_model')->getProfileTransaction();
        $this->view('templates/header', $data);
        $this->view('cars/details', $data);
        $this->view('templates/footer');
    }
}
