<?php

class About extends Controller
{
    // method default
    public function index($nama = 'Erik', $pekerjaan = 'Dev', $umur = '20')
    {
        // kirimkan data ke page about/index yang akan diterima $data
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['index'] = 'Index About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['index'] = 'Page About';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
