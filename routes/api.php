<?php


use App\Livewire\SensorList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/sensorlist', SensorList::class)->name('sensor.list');

use App\Http\Controllers\RegistroController;
use App\Livewire\Registro\RegistroList;





Route::post('/registro/create', [RegistroController::class, "store"]);

Route::post('/registro/controller', [RegistroController::class, "store"]);

