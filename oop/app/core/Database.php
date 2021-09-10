<?php

namespace oop\app\core;

use PDO;
use PDOException;

class Database
{

    private $host = DB_HOST;
    private $password = DB_PASSWORD;
    private $username = DB_USERNAME;
    private $dbName = DB_NAME;

    private $dbHandler;
    private $statement;

    public function __construct()
    {
        // Data Source Name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;

        $option = [
            PDO::ATTR_PERSISTENT => true, // digunakan untuk menjaga koneksi pada database
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbHandler = new PDO($dsn, $this->username, $this->password, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->statement = $this->dbHandler->prepare($query);
    }

    public function execute()
    {
        $this->statement->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    // count row yang di return oleh sql query
    public function rowCount()
    {
        return $this->statement->rowCount();
    }
}
