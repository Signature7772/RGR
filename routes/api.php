<?php

use App\Http\Middleware\ApiTokenMiddleware;
use App\Http\Resources\CityResource;
use App\Http\Resources\AirportResource;
use App\Http\Resources\FlightResource;
use App\Models\Airport;
use App\Models\City;
use App\Models\Flight;
use Illuminate\Support\Facades\Route;



Route::middleware(ApiTokenMiddleware::class)->group(function () {
    Route::get('/cities', function () {
        return CityResource::collection(City::all());
    });

    Route::get('/airports', function () {
        return AirportResource::collection(Airport::all());
    });

    Route::get('/flights', function () {
        return FlightResource::collection(Flight::all());
    });
});

