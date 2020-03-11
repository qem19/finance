<?php

declare(strict_types=1);

namespace App\Modules\Budget\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property-read int $budget_id
 * @property-read int $category_id
 * @property-read float $amount
*/
class BudgetConsumption extends Model
{
    protected $fillable = ['budget_id', 'category_id'];
}
