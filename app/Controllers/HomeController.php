<?php

declare(strict_types=1);

namespace App\Controllers;

use Theozebua\OzeFramework\View\View;
use function view;
use function view_path;

final class HomeController extends Controller
{
    final public function index(): View
    {
        return view(view_path('welcome'));
    }
}
