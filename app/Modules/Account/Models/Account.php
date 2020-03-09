<?php

declare(strict_types=1);

namespace App\Modules\Account\Models;

use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property-read string $name
 * @property-read int $user_id
 * @property-read float $balance
 *
 * Scopes:
 * @method Builder|self byUser(User $user)
 */
class Account extends Model
{
    protected $fillable = ['name', 'user_id', 'balance'];

    public function scopeByUser(Builder $query, User $user): Builder
    {
        return $query->where('user_id', $user->id);
    }
}
