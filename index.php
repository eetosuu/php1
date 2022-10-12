<?php
session_start();

$controller = $_GET['controller'] ?? 'home';
$routes = require('routes/routes.php');

require_once $routes[$_SERVER['REQUEST_URI']];
