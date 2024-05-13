<?php

define('BASE_PROJECT_PATH', __DIR__);
define('BASE_URL', "http://" . $_SERVER["HTTP_HOST"]);
define('VIEW_PATH', BASE_PROJECT_PATH . '/view/');

require_once BASE_PROJECT_PATH . "/helper/dd.php";
require_once BASE_PROJECT_PATH . "/helper/asset.php";
require_once BASE_PROJECT_PATH . "/helper/url.php";
require_once BASE_PROJECT_PATH . "/helper/route.php";
require_once BASE_PROJECT_PATH . "/helper/view.php";

$routeMap = registerRoute(BASE_PROJECT_PATH . "/routes/web.php");

$mysqlCon = require_once BASE_PROJECT_PATH . "/db/conn.php";

if (!$mysqlCon) {
    die("Connection failed: " . mysqli_connect_error());
}

$handlerDir = BASE_PROJECT_PATH . '/handler';
$selectedRoute = $routeMap[$_SERVER['REQUEST_METHOD']][$_SERVER['PATH_INFO'] ?? '/'] ?? null;
if (!$selectedRoute) {
    view("404");
    exit();
}
require_once "{$handlerDir}/{$selectedRoute['file']}.php";
$selectedRoute['func']($mysqlCon);
mysqli_close($mysqlCon);
