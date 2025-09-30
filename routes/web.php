<?php

use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteList;
use App\Livewire\Dashboard;

use App\Livewire\SensorCreate;
use App\Livewire\SensorList;


use App\Livewire\Registro\RegistroList;
use Illuminate\Support\Facades\Route;

Route::get('/list/Registro ', RegistroList::class)->name('lista');


use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/sensorcreate', SensorCreate::class);

Route::get('/sensorlist', SensorList::class)->name('sensor.list');

Route::get('/sensoredit{id}', SensorList::class)->name('sensor.edit');

Route::get('/ambientecreate', AmbienteCreate::class)->name('ambiente.create');

Route::get('/ambiente/{id}/edit', AmbienteEdit::class)->name('ambiente.edit');

Route::get('/ambientelist', AmbienteList::class)->name('ambiente.list');

