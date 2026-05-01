<?php
class Database {
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "student_db";
    public $conn;
   
    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->dbname
        );

    }
}

$obj = new Database(); 
?>
