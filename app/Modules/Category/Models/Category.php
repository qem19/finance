<?php

declare(strict_types=1);

namespace App\Modules\Category;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property-read string $name
 * @property-read string $type
 */
class Category extends Model
{
    protected $fillable = ['name'];
}
