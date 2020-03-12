<?php

declare(strict_types=1);

namespace App\Modules\Account\Commands;

use App\Modules\Account\Models\Account;
use App\Modules\User\Models\User;

class CreateAccount
{
    private $name;
    private $balance;
    private $goalBalance;
    private $user;

    public function __construct(User $user, string $name, float $balance, ?float $goalBalance = null)
    {
        $this->name = $name;
        $this->balance = $balance;
        $this->goalBalance = $goalBalance;
        $this->user = $user;
    }

    public function handle()
    {
        Account::create([
            'name' => $this->name,
            'balance' => $this->balance,
            'goal_balance' => $this->goalBalance,
            'user_id' => $this->user->id
        ]);
    }
}
