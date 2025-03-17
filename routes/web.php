<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/BesaFranco', 'App\Http\Controllers\featuresController@index');