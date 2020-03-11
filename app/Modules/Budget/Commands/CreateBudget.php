<?php

declare(strict_types=1);

namespace App\Modules\Budget\Commands;

use App\Modules\Budget\Models\Budget;
use App\Modules\User\Models\User;
use Illuminate\Support\Carbon;

class CreateBudget
{
    private User $user;
    private Carbon $from;
    private Carbon $to;

    public function __construct(User $user, Carbon $from, Carbon $to)
    {
        $this->user = $user;
        $this->from = $from;
        $this->to = $to;
    }

    public function handle()
    {
        Budget::create([
            'user_id' => $this->user->id,
            'from' => $this->from,
            'to' => $this->to,
        ]);
    }
}
