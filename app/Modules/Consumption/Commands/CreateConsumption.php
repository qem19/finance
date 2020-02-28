<?php

declare(strict_types=1);

namespace App\Modules\Consumption\Commands;

use App\Modules\Category\Category;
use App\Modules\Consumption\Models\Consumption;
use App\User;

class CreateConsumption
{
    private Category $category;
    private User $user;
    private int $price;
    private ?string $comment;

    public function __construct(Category $category, User $user, int $price, ?string $comment)
    {
        $this->category = $category;
        $this->user = $user;
        $this->price = $price;
        $this->comment = $comment;
    }

    public function handle()
    {
        Consumption::create([
            'category_id' => $this->category->id,
            'user_id' => $this->user->id,
            'price' => $this->price,
            'comment' => $this->comment,
        ]);
    }
}
