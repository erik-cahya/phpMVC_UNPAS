<?php

class Home extends Controller
{
    public function index()
    {
        $data['index'] = 'Dashboard Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
