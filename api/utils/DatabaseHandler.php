<?php

require_once __DIR__ . "/../__config.php";

class DatabaseHandler
{
    private string $hostname;
    private int $port;
    private string $username;
    private string $password;
    private string $database;
    protected mysqli $connection;


    public function __construct()
    {
        $this->hostname = __config::$hostname;
        $this->port = __config::$port;
        $this->username = __config::$username;
        $this->password = __config::$password;
        $this->database = __config::$database;

        $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database, $this->port);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

        mysqli_set_charset($this->connection, "utf8");
    }

    public function getConnection(): mysqli
    {
        return $this->connection;
    }
}