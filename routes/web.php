<?php

declare(strict_types=1);

use App\Controllers\HomeController;
use OzeFramework\App\App;

/*
|------------------------------------------------------------
| Get The App Instance
|------------------------------------------------------------
*/

/** @var App $app */
$app = require __DIR__ . '/../bootstrap/app.php';

/*
|------------------------------------------------------------
| Register Web Routes
|------------------------------------------------------------
*/

$app->route->get('/', [HomeController::class, 'index']);

/*
|------------------------------------------------------------
| Return The Router Instance
|------------------------------------------------------------
*/

return $app;
