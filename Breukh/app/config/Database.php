<?php
namespace App\config;

use PDO;

class Database {

    private $dsn = "localhost";
    private $dbname = "breukh";
    private $username = "maimouna";
    private $passwd = "maimouna55";
    private $db;

    public function getConnexion() {
        $this->db = new PDO('mysql:host=' . $this->dsn . ';dbname=' . $this->dbname . ';charset=utf8',
         $this->username, $this->passwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         return $this->db;
    }


}