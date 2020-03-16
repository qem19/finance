<?php

declare(strict_types=1);

namespace App\Http\Controllers\Consumption;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddConsumptionRequest;
use App\Modules\Account\Models\Account;
use App\Modules\Category\Category;
use App\Modules\Consumption\Commands\CreateConsumption;
use Illuminate\Http\Request;

class ConsumptionController extends Controller
{
    public function add(Request $request)
    {
        $categories = Category::all()->map->only(['id', 'name']);
        $user = $request->user();
        $accounts = Account::byUser($user)->get()->map->only(['id', 'name']);

        return view('consumption.add', compact('categories', 'accounts'));
    }

    public function addHandle(AddConsumptionRequest $request)
    {
        $params = $request->validated();

        $category = Category::find($params['category_id']);
        $user = $request->user();
        $account = Account::byUser($user)->find($params['account_id']);

        $this->dispatchNow(
            new CreateConsumption($category, $account, (int) $params['price'], $params['comment'] ?? null)
        );
    }
}
