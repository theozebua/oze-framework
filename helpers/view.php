<?php

declare(strict_types=1);

use Theozebua\OzeFramework\View\View;

if (!function_exists('view')) {
    /**
     * Render a view.
     * 
     * @param string $view
     * @param array $data
     * 
     * @return View
     */
    function view(string $view, array $data = []): View
    {
        return View::make(view_path($view), $data);
    }
}
