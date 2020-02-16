<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Consumption')
    ->prefix('consumption')
    ->group(__DIR__ . '/consumption.php');
