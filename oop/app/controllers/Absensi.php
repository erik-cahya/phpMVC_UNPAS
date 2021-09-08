<?php

namespace oop\app\controllers;

class Absensi extends \oop\app\core\Controller
{

    public function index()
    {
        $data['judul'] = "Manage Kehadiran Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => 'active'
        ];

        $this->view('templates/header', $data);
        $this->view('admin/absensi/index');
        $this->view('templates/footer');
    }
}
