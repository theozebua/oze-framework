<?php

declare(strict_types=1);

use OzeFramework\Router\Route;

ini_set('display_errors', true);

/*
|------------------------------------------------------------
| Get All Registered Routes
|------------------------------------------------------------
*/

/** @var Route $route */
$route = require __DIR__ . '/../routes/web.php';

/*
|------------------------------------------------------------
| Resolve All Registered Routes
|------------------------------------------------------------
*/

$requestMethod = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$route->routeRegistrar->resolve($_SERVER['REQUEST_URI'], strtoupper($requestMethod));
