<?php

declare(strict_types=1);

if (!function_exists('view_path')) {
    /**
     * Get view path.
     * 
     * @param string $path [optional]
     * 
     * @return string
     */
    function view_path(string $path = ''): string
    {
        ['view_path' => $viewPath] = require __DIR__ . '/../config/path.php';

        return $viewPath . ltrim($path, '/');
    }
}
