<?php
require 'Router.php';
$route = new Router;
$route->add('', 'controllers/indexController.php');
$route->add('about', 'controllers/aboutController.php');
$route->add('contact', 'controllers/contactController.php');
$route->add('notfound', 'controllers/notFoundController.php');

