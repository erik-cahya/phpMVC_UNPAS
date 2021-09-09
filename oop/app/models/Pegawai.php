<?php

namespace oop\app\models;


class Pegawai
{
    // private $table = 'pegawai';
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
}
