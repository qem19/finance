<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddConsumptionRequest extends FormRequest
{
    function rules(): array
    {
        return [
            'category_id' => 'required|integer',
            'price' => 'required|integer',
            'account_id' => 'required|integer',
            'comment' => 'string',
        ];
    }
}
