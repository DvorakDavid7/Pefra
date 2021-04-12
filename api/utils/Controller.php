<?php

require_once "DatabaseHandler.php";
require_once "allowCors.php";

class Controller
{

    protected mysqli $connection;

    public function __construct()
    {
        $db = new DatabaseHandler();
        $this->connection = $db->getConnection();
        allowCors();
    }
}
