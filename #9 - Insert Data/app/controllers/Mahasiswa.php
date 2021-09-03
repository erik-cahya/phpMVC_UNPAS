<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['index'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['index'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // var_dump($_POST);

        // Jika nilai dari $_POST itu bernilai lebih besar daripada 0, maka ada data yang berhasil ditambahkan
        // dan redirect ke halaman index mahasiswa
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}
