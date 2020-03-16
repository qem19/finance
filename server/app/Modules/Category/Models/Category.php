<?php

declare(strict_types=1);

namespace App\Modules\Category\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property-read string $name
 * @property-read string $type
 */
class Category extends Model
{
    public const ADD_TYPE = 'add';
    public const SUB_TYPE = 'sub';

    public const TYPES = [
        self::ADD_TYPE, self::SUB_TYPE
    ];

    protected $fillable = ['name', 'type'];
}
