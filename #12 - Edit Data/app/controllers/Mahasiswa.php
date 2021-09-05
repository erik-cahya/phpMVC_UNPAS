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
            Flasher::setFlash('berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('berhasil', ' gagal', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        // var_dump($_POST);

        // Jika nilai dari $_POST itu bernilai lebih besar daripada 0, maka ada data yang berhasil ditambahkan
        // dan redirect ke halaman index mahasiswa
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', ' dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', ' dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function edit()
    {
        // var_dump($_POST);

        if ($this->model('Mahasiswa_model')->editDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', ' diubah', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', ' diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function search()
    {
        if ($this->model('Mahasiswa_model')->searchDataMahasiswa($_POST) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
        }
    }
}
