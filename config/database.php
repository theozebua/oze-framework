<?php

declare(strict_types=1);

return [
    'dsn_prefix' => 'mysql',
    'charset'    => 'utf8mb4',
    'host'       => env('DATABASE_HOST') ?: 'localhost',
    'port'       => env('DATABASE_PORT') ?: '3306',
    'database'   => env('DATABASE_NAME') ?: 'oze_framework',
    'username'   => env('DATABASE_USER') ?: 'root',
    'password'   => env('DATABASE_PASS') ?: 'verysecurepassword',
];
