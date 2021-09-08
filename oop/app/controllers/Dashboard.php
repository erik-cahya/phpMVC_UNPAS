<?php

namespace oop\app\controllers;

class Dashboard extends \oop\app\core\Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Dashboard";
        $data['link'] = [
            'dashboard' => 'active',
            'pegawai' => '',
            'kehadiran' => ''
        ];

        $this->view('templates/header', $data);
        $this->view('admin/dashboard/index');
        $this->view('templates/footer');
    }
}
