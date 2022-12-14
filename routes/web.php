<?php

declare(strict_types=1);

use App\Controllers\HomeController;
use OzeFramework\Router\Route;

/*
|------------------------------------------------------------
| Register Web Routes
|------------------------------------------------------------
*/

$route = new Route();

$route->get('/', [HomeController::class, 'index']);

/*
|------------------------------------------------------------
| Return The Router Instance
|------------------------------------------------------------
*/

return $route;
