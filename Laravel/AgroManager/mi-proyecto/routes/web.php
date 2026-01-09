<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticulosController;

Route::get('pelis', [ParcelasController::class, 'mostrar']);

Route::get('/articulos', [ArticulosController::class, 'mostrar']);

Route::get('/', function () {
    return view('welcome');
});










