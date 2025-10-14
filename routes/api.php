<?php


use App\Livewire\SensorList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/sensorlist', SensorList::class)->name('sensor.list');

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensorController;
use App\Livewire\Registro\RegistroList;





Route::post('/registro/create', [RegistroController::class, "store"]);

Route::post('/registro/controller', [RegistroController::class, "store"]);


Route::get('/sensor', [SensorController::class, "find"]);
Route::put('/sensor/update', [SensorController::class, "update"]);
