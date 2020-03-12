<?php

declare(strict_types=1);

namespace App\Modules\Category\Commands;

use App\Modules\Category\Exceptions\IncorrectCategoryType;
use App\Modules\Category\Models\Category;
use App\Modules\User\Models\User;

class CreateCategory
{
    private $name;
    private $type;
    private $user;

    public function __construct(string $name, string $type, User $user)
    {
        $this->name = $name;
        $this->type = $type;
        $this->user = $user;
    }

    public function handle()
    {
        if (!in_array($this->type, Category::TYPES, true)) {
            throw new IncorrectCategoryType($this->type);
        }

        Category::create([
            'name' => $this->name,
            'type' => $this->type,
            'user_id' => $this->user->id
        ]);
    }
}
