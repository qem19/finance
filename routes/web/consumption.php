<?php

use Illuminate\Support\Facades\Route;

Route::get('/add', 'ConsumptionController@add')->name('add');
Route::post('/add-handle', 'ConsumptionController@addHandle')->name('addHandle');
