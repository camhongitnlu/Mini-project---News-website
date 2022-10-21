<?php
class Database
{
  protected $host = "localhost";
  protected $user = "root";
  protected $pass = "12345";
  protected $db_name = "newsdatabase";
  public $conn;

  public function __construct()
  {
    $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
    if ($this->conn->connect_error) die("Connection failed: " . $this->conn->connect_error);
    $this->conn->query("SET NAMES utf8");
  }
}
