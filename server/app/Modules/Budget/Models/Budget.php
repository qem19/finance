<?php

declare(strict_types=1);

namespace App\Modules\Budget\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property-read int $id
 * @property-read int $user_id
 * @property-read Carbon $from
 * @property-read Carbon $to
*/
class Budget extends Model
{
    protected $fillable = ['user_id', 'from', 'to'];
}
