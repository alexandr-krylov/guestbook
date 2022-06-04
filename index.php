<?php

use App\App;
use Controllers\IndexController;

require __DIR__.'/vendor/autoload.php';
echo "Hello, world!!!";
// phpinfo();
$config = require_once './config/config.php';
// var_dump($config);
$app = App::getApp($config);
// $app2 = App::getApp();
// var_dump($app, $app2);
$app->requestCapture();
// $controller = new IndexController();
// $controller->actionIndex();