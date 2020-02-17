<?php

declare(strict_types=1);

namespace App\Http\Controllers\Consumption;

use App\Http\Controllers\Controller;

class ConsumptionController extends Controller
{
    public function add()
    {
        return view('consumption.add');
    }
}
