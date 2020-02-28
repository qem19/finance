<?php

declare(strict_types=1);

namespace App\Http\Controllers\Consumption;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddConsumptionRequest;
use App\Modules\Category\Category;
use App\Modules\Consumption\Commands\CreateConsumption;
use App\User;

class ConsumptionController extends Controller
{
    public function add()
    {
        return view('consumption.add');
    }

    public function addHandle(AddConsumptionRequest $request)
    {
        $params = $request->validated();

        $category = Category::find($params['category_id']);
        // @todo брать пользователя из реквеста
        $user = User::first();

        $this->dispatchNow(new CreateConsumption($category, $user, $params['price'], $params['comment'] ?? null));
    }
}
