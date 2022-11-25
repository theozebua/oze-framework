<?php

declare(strict_types=1);

namespace App\Controllers;

use Theozebua\OzeFramework\View\View;
use function view;

final class HomeController extends Controller
{
    final public function index(): View
    {
        return view('welcome');
    }
}
