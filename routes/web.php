<?php

declare(strict_types=1);

use App\Controllers\HomeController;
use Theozebua\OzeFramework\Router\Route;

/*
|------------------------------------------------------------
| Create Router Instance
|------------------------------------------------------------
*/

$route = new Route();

/*
|------------------------------------------------------------
| Register Web Routes
|------------------------------------------------------------
*/

$route->get('/', [HomeController::class, 'index']);
$route->get('/create', [HomeController::class, 'create']);

/*
|------------------------------------------------------------
| Return The Router Instance
|------------------------------------------------------------
*/

return $route;
