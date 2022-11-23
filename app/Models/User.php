<?php

declare(strict_types=1);

namespace App\Models;

/**
 * This is just an example of a model.
 */
final class User
{
    /**
     * Get all dummy users.
     * 
     * @return array
     */
    final public function all(): array
    {
        return [
            (object) [
                'name'  => 'John Doe',
                'email' => 'johndoe@gmail.com',
            ],
            (object) [
                'name'  => 'Jane Doe',
                'email' => 'janedoe@gmail.com',
            ],
        ];
    }
}
