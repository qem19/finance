<?php

declare(strict_types=1);

namespace App\Modules\Consumption\Commands;

use App\Modules\Category\Category;
use App\Modules\Consumption\Models\Consumption;
use App\Modules\User\Models\User;
use App\Modules\Account\Models\Account;

class CreateConsumption
{
    private Category $category;
    private Account $account;
    private float $price;
    private ?string $comment;

    public function __construct(Category $category, Account $account, float $price, ?string $comment)
    {
        $this->category = $category;
        $this->account = $account;
        $this->price = $price;
        $this->comment = $comment;
    }

    public function handle()
    {
        Consumption::create([
            'category_id' => $this->category->id,
            'account_id' => $this->account->id,
            'price' => $this->price,
            'comment' => $this->comment,
        ]);
    }
}
