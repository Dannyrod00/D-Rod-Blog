<?php
class Database {
    private $connection;
    private $host;
    private $password;
    private $username;
    private $database;
    
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->password = $password;
        $this->username = $username;
        $this->database = $database;
    }
}

