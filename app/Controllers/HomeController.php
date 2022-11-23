<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;

final class HomeController extends Controller
{
    final public function index(User $user): void
    {
        echo 'From: ' . __METHOD__ . PHP_EOL;

        foreach ($user->all() as $u) {
            echo "
                <ul>
                    <li>{$u->name}</li>
                    <li>{$u->email}</li>
                </ul>
            ";
        }
    }
}
