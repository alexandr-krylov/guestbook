<?php

namespace App;

use Conrtollers;

class App
{
    private static ?App $instance = null;
    private Controller $controller;

    private function __construct(public array $config = [])
    {
        echo "construct App";
    }

    public static function getApp($config = []): App
    {
        if (self::$instance == null) {
            self::$instance = new static($config);
        }
        return self::$instance;
    }

    public function requestCapture()
    {
        echo "request capture <br>";
        // var_dump($_SERVER['REQUEST_URI']);
        $requestURI = trim($_SERVER['REQUEST_URI'], " \n\r\t\v\x00/");
        [$controller, $action] = explode('/', $requestURI);
        var_dump($requestURI);
        var_dump($controller, $action);
        var_dump($this->config);
    }

}