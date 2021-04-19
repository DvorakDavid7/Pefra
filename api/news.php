<?php

require_once __DIR__ . "/Controller.php";


class NewsController extends Controller
{
    public function getNews()
    {
        $query = "SELECT * FROM News ORDER BY created;";
        $sqlResult = mysqli_query($this->connection, $query);

        $result = [
            "data" => array()
        ];

        while ($row = mysqli_fetch_assoc($sqlResult)) {
            array_push($result["data"], $row);
        }
        header('Content-type: application/json');
        echo json_encode($result);
    }
}


$newsController = new NewsController();

switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $newsController->getNews();
        break;

    default:
        http_response_code(404);
        echo "service unavailable";
}
