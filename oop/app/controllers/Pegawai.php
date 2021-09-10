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
        $data['jabatan'] = $this->model('Pegawai')->getAllJabatan();

        $this->view('templates/header', $data);
        $this->view('admin/pegawai/index', $data);
        $this->view('templates/footer');
    }



    public function detail($nik)
    {
        $data['judul'] = "Detail Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => ''
        ];


        $data['query'] = $this->model('Pegawai')->getPegawaiByNik($nik);
        $this->view('templates/header', $data);
        $this->view('admin/pegawai/detail', $data);
        $this->view('templates/footer');
    }

    public function search()
    {
        $data['judul'] = "Halaman Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => ''
        ];

        $data['query'] = $this->model('Pegawai')->searchDataPegawai();
        $data['jabatan'] = $this->model('Pegawai')->getAllJabatan();

        $this->view('templates/header', $data);
        $this->view('admin/pegawai/index', $data);
        $this->view('templates/footer');
    }
}
