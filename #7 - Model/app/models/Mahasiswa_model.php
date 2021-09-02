<?php
class Mahasiswa_model
{
    // data berdasarkan array
    // private $mhs = [
    //     [
    //         "nama" => "Erik Cahya Pradana",
    //         "nim" => "190030209",
    //         "email" => "erikcp38@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Kadek Indah Melanie Dewi",
    //         "nim" => "190030066",
    //         "email" => "indahmelanie@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Ricky Aurelius",
    //         "nim" => "190020503",
    //         "email" => "ricky@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];


    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // method untuk mengambil semua data
    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
