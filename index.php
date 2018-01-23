<?php
require 'vendor/autoload.php';
require 'routes.php';
$server_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$trim_uri = trim($server_uri, '/');
$route->call($trim_uri);