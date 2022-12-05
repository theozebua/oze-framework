<?php

declare(strict_types=1);

namespace App\Models;

use OzeFramework\Database\Model;

final class User extends Model
{
    /** {@inheritdoc} */
    protected string $model = self::class;

    /** {@inheritdoc} */
    protected string $table = 'users';
}
