<?php

use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteList;
use App\Livewire\Dashboard;
use App\Livewire\SensorCreate;
use App\Livewire\SensorList;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/sensorcreate', SensorCreate::class);

Route::get('/sensorlist', SensorList::class);

Route::get('/ambienteEdit', AmbienteEdit::class);

Route::get('/ambienteCreate', AmbienteCreate::class);

Route::get('/ambiente/list', AmbienteList::class)->name('ambiente.list');


