<?php

declare(strict_types=1);

namespace App\Controllers;

use OzeFramework\View\View;

final class HomeController extends Controller
{
    final public function index(): View
    {
        return View::make('welcome');
    }
}
