<?php

declare(strict_types=1);

namespace App\Modules\Consumption\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Attributes
 * @property-read integer $id
 * @property-read integer $category_id
 * @property-read integer $price
 * @property-read integer $user_id
 * @property-read string $comment
*/
class Consumption extends Model
{
    protected $fillable = [
        'category_id',
        'price',
        'user_id',
        'comment'
    ];
}
