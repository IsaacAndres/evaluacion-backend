<?php

use App\Http\Controllers\CallesController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\RegionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(RegionController::class)
->prefix('regiones')
->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::put('/{region}', 'update');
    Route::delete('/{region}', 'destroy');
});

Route::controller(ProvinciaController::class)
->prefix('provincias')   
->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::put('/{provincia}', 'update');
    Route::delete('/{provincia}', 'destroy');
});

Route::controller(CiudadController::class)
->prefix('ciudades')   
->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::put('/{ciudad}', 'update');
    Route::delete('/{ciudad}', 'destroy');
});

Route::controller(CallesController::class)
->prefix('calles')   
->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::put('/{calle}', 'update');
    Route::delete('/{calle}', 'destroy');
});