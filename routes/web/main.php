<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'DashboardController@index')
    ->middleware('auth')
    ->name('home');

Auth::routes();

Route::namespace('Consumption')
    ->prefix('consumption')
    ->name('consumption.')
    ->middleware('auth')
    ->group(__DIR__ . '/consumption.php');
