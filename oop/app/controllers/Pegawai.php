<?php

namespace oop\app\controllers;

class Pegawai extends \oop\app\core\Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => ''
        ];

        $data['query'] = $this->model('Pegawai')->getAllPegawai();

        $this->view('templates/header', $data);
        $this->view('admin/pegawai/index', $data);
        $this->view('templates/footer');
    }

    public function detail()
    {
        $data['judul'] = "Detail Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => ''
        ];

        $this->view('templates/header', $data);
        $this->view('admin/pegawai/detail');
        $this->view('templates/footer');
    }
}
