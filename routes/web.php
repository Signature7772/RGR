<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;
use App\Models\City;
use App\Models\Airport;
use App\Models\Flight;

// Головна сторінка калькулятора
Route::get('/', [MathController::class, 'index']);

// Обробка обчислення виразу
Route::post('/calculate', [MathController::class, 'calculate'])->name('calculate');
