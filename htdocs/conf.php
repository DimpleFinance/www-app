<?php
include "../conf.php";
//error_reporting(0);
switch($_SERVER['HTTP_HOST'])
{
    case "dimple-app.infocoin.pro":
        $api = "https://dimple-api.infocoin.pro/";
        $api2 = "";
        $js_debug = 1;
    break;
    default:
        $api = "https://dimple-api.infocoin.pro/";
        $api = "https://api.dimple.finance/";
        $api2 = "";
}
