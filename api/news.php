<?php


require_once "utils/DatabaseHandler.php";

function getNews()
{
    $db = new DatabaseHandler();
    $connection = $db->getConnection();

    $query = "SELECT * FROM News;";
    $sqlResult = mysqli_query($connection, $query);

    $result = [
        "data" => array()
    ];

    while ($row = mysqli_fetch_assoc($sqlResult)) {
        array_push($result["data"], $row);
    }
    echo json_encode($result);
}

getNews();
