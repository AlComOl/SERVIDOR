<?php

use Illuminate\Support\Facades\Route;

Route::get('pelis', [ParcelasController::class, 'mostrar']);

Route::get('/', function () {
    return view('welcome');
});









