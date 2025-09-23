<?php

use App\Livewire\SensorList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/sensorlist', SensorList::class)->name('sensor.list');