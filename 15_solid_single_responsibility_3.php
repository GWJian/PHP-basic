<?php

// BEFORE
class DatabaseConnection {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;
  
    public function __construct($host, $username, $password, $database) {
      $this->host = $host;
      $this->username = $username;
      $this->password = $password;
      $this->database = $database;
    }
  
    public function connect() {
      $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
  
    public function query($sql) {
      $result = mysqli_query($this->connection, $sql);
      return $result;
    }
  
    public function fetchAll($result) {
      $rows = [];
      while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
      return $rows;
    }
}

$db = new DatabaseConnection();
$db->query('SELECT * FROM users');


// AFTER
class DatabaseConnection
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
}

class DatabaseQuery
{
    private $connection;

    public function __construct( $connection )
    {
        $this->connection = $connection;
    }

    public function query($sql) {
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }
    
    public function fetchAll($result) {
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
        }
        return $rows;
    }
}

$db = new DatabaseConnection();
$dbQuery = new DatabaseQuery( $db->connect() );
$dbQuery->query('SELECT * FROM users');