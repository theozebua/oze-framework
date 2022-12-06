<?php

declare(strict_types=1);

use OzeFramework\App\App;

return [
    'dsn_prefix' => 'mysql',
    'charset'    => 'utf8mb4',
    'host'       => App::env('DATABASE_HOST') ?: 'localhost',
    'port'       => App::env('DATABASE_PORT') ?: '3306',
    'database'   => App::env('DATABASE_NAME') ?: 'oze_framework',
    'username'   => App::env('DATABASE_USER') ?: 'root',
    'password'   => App::env('DATABASE_PASS') ?: 'verysecurepassword',
];
