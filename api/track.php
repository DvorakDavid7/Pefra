<?php


require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/lib/UserInfo.php";

class TrackController extends Controller
{
    public function writeActivity($data)
    {
        $sql = "INSERT INTO Customer (ip, os, browser, device, visited, city, country, provider, location) VALUE(
            '$data->ip', '$data->os', '$data->browser', '$data->device', '$data->date', '$data->city', '$data->country', '$data->provider', '$data->loc'
        );";

        if (!$this->connection->query($sql)) {
            return json_encode(["message" => "unable to write to database"]);
        }
        return json_encode(["message" => "ok"]);
    }
}


class Data
{
    public $ip;
    public $os;
    public $browser;
    public $device;
    public $date;
    public $city;
    public $country;
    public $provider;
    public $loc;
}

$data = new Data();

$data->ip = UserInfo::get_ip();
$data->os = UserInfo::get_os();
$data->browser = UserInfo::get_browser();
$data->device = UserInfo::get_device();
$data->date = date('Y-m-d H:i:s');

$url = "https://ipinfo.io/$data->ip";
$contents = file_get_contents($url);
$json = json_decode($contents);

$data->city = $json->{"city"} ?: "NULL";
$data->country = $json->{"country"} ?: "NULL";
$data->provider = $json->{"org"} ?: "NULL";
$data->loc = $json->{"loc"} ?: "NULL";

$trackController = new TrackController();

switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        echo "ok";
        break;

    case "POST":
        echo $trackController->writeActivity($data);
        break;

    default:
        http_response_code(404);
        echo "service unavailable";
}
