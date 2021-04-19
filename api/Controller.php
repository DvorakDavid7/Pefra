<?php

require_once __DIR__ . "/utils/DatabaseHandler.php";
require_once __DIR__ . "/utils/allowCors.php";

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
