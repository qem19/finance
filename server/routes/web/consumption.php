<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ConsumptionController@index')->name('list');
Route::post('/', 'ConsumptionController@add')->name('add');
