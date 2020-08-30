<?php

declare(strict_types=1);

namespace App\Modules\Account\Models;

use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property-read int $id
 * @property-read string $name
 * @property-read int $user_id
 * @property-read float $balance
 * @property-read float $goal_balance
 *
 * Attributes:
 * @property-read User $user
 *
 * Scopes:
 * @method Builder|self byUser(User $user)
 */
class Account extends Model
{
    protected $fillable = ['name', 'user_id', 'balance'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeByUser(Builder $query, User $user): Builder
    {
        return $query->where('user_id', $user->id);
    }
}
