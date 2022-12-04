<?php

declare(strict_types=1);

use OzeFramework\App\App;

ini_set('display_errors', true);

/*
|------------------------------------------------------------
| Create The Application Instance
|------------------------------------------------------------
*/

$container = require __DIR__ . '/../services/bindings.php';
$route     = require __DIR__ . '/../routes/web.php';
$app       = new App(dirname(__DIR__), $container, $route);

/*
|------------------------------------------------------------
| Return The Application Instance
|------------------------------------------------------------
*/

return $app;
