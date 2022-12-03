<?php

declare(strict_types=1);

use OzeFramework\App\App;

ini_set('display_errors', true);

/*
|------------------------------------------------------------
| Register The Composer Auto Loader
|------------------------------------------------------------
*/

require __DIR__ . '/../vendor/autoload.php';

/*
|------------------------------------------------------------
| Bootstrap The Application
|------------------------------------------------------------
*/

/** @var App $app */
$app = require __DIR__ . '/../routes/web.php';

/*
|------------------------------------------------------------
| Run The Application
|------------------------------------------------------------
*/

$app->run();
