<?php

class Home extends Controller
{
    public function index()
    {
        $data['index'] = 'Dashboard Home';
        // mengambil data nama yang berasal dari model
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
