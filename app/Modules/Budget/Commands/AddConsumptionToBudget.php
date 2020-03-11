<?php

declare(strict_types=1);

namespace App\Modules\Budget\Commands;

use App\Modules\Budget\Models\Budget;
use App\Modules\Category\Category;

class AddConsumptionToBudget
{
    private $budget;
    private $category;
    private $amount;

    public function __construct(Budget $budget, Category $category, float $amount)
    {
        $this->budget = $budget;
    }
}
