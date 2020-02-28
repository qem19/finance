<?php

use Illuminate\Support\Facades\Route;

Route::get('/add', 'ConsumptionController@add')->name('addConsumption');
Route::post('/add-handle', 'ConsumptionController@addHandle')->name('addHandleConsumption');
