<?php

namespace oop\app\models;


class Pegawai_model
{

    private $table = 'pegawai';
    private $database;

    // Instansiasi controller database
    public function __construct()
    {
        $this->database = new \oop\app\core\Database;
    }

    // Query semua data pegawai
    public function getAllPegawai()
    {
        $this->database->query("SELECT * FROM " . $this->table);
        return $this->database->resultSet();
    }
}
