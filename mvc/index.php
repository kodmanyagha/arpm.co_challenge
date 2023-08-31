<?php

$selectedTemplate = 'example';

// TODO Think about include or require?
$routeConfig = require_once('./config/route.php');

$requestUrl = $_SERVER['REQUEST_URI'];

if ( !isset($routeConfig[$requestUrl])) {
    header();
    exit;
}

list($controller, $method) = explode('@', $routeConfig[$requestUrl]);
require_once('./base/functions.php');

require_once('./controllers/' . $controller . '.php');

$controller = new $controller();

$controller->$method();

