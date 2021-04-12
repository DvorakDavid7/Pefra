<?php


require_once "utils/Controller.php";

class PicturesController extends Controller
{
    public function getPictures()
    {
        echo "get pictures";
    }

    public function savePicture()
    {
        var_dump($_FILES["file"]);
    }
}


$picturesController = new PicturesController();

switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $picturesController->getPictures();
        break;

    case "POST":
        $picturesController->savePicture();
        break;

    default:
        http_response_code(404);
        echo "service unavailable";
}
