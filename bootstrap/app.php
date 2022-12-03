<?php

declare(strict_types=1);

use OzeFramework\App\App;

ini_set('display_errors', true);

/*
|------------------------------------------------------------
| Create The App Instance
|------------------------------------------------------------
*/

$app = new App(dirname(__DIR__));

/*
|------------------------------------------------------------
| Return The App Instance
|------------------------------------------------------------
*/

return $app;
