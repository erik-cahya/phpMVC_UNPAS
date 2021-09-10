<?php

namespace oop\app\models;


class Pegawai
{
    private $database;

    // Instansiasi controller database
    public function __construct()
    {
        $this->database = new \oop\app\core\Database;
    }

    // Query semua data pegawai
    public function getAllPegawai()
    {
        $this->database->query("SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan");
        return $this->database->resultSet();
    }

    // Query semua data pegawai
    public function getAllJabatan()
    {
        $this->database->query("SELECT * FROM jabatan");
        return $this->database->resultSet();
    }

    // Get Pegawai By Nik
    public function getPegawaiByNik($nik)
    {
        $this->database->query("SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan WHERE nik=$nik");
        return $this->database->single();
    }

    // Search Data Pegawai
    public function searchDataPegawai()
    {
        $keyword = @$_POST["keyword"];
        $query = "SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan WHERE nama_pegawai LIKE '%$keyword%' OR nik LIKE '%$keyword%'";

        $this->database->query($query);

        return $this->database->resultSet();
    }
}
