<?php

class Pegawai extends Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Pegawai";

        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => ''
        ];

        $this->view('templates/header', $data);
        $this->view('pegawai/index');
        $this->view('templates/footer');
    }

    public function detail()
    {
        $data['judul'] = "Detail Pegawai";
        $data['linkDashboard'] = '';
        $data['linkPegawai'] = 'active';
        $data['linkKehadiran'] = '';

        $this->view('templates/header', $data);
        $this->view('pegawai/detail');
        $this->view('templates/footer');
    }
}
