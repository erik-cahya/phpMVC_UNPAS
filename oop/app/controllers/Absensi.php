<?php

class Absensi extends Controller
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
        $this->view('absensi/index');
        $this->view('templates/footer');
    }
}
