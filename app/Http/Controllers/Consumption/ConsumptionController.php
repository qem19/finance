<?php

declare(strict_types=1);

namespace App\Http\Controllers\Consumption;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddConsumptionRequest;
use App\Modules\Category\Category;
use App\Modules\Consumption\Commands\CreateConsumption;
use App\Modules\User\Models\User;

class ConsumptionController extends Controller
{
    public function add()
    {
        $categories = Category::all()->map->only(['id', 'name']);

        return view('consumption.add', compact('categories'));
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
