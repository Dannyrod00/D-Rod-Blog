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
   
    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
       
        if ($this->connection->connect_error) {
            die("<p>Error" . $connection->connect_error . "</p>");
            
        }
        
    
}

public function closeConnection() {
    
}

public function query($string) {
    
}

}

