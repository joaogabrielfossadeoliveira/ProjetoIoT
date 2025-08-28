<?php

use App\Livewire\Dashboard;
use App\Livewire\SensorCreate;
use App\Livewire\SensorList;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/sensorcreate', SensorCreate::class);

Route::get('/sensorlist', SensorList::class)->name('sensor.list');

Route::get('/sensoredit{id}', SensorList::class)->name('sensor.edit');


