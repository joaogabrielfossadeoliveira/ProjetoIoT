<?php

use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteList;
use App\Livewire\Dashboard;

use App\Livewire\SensorCreate;
use App\Livewire\SensorList;


use App\Livewire\Registro\RegistroList;


use App\Models\Sensor;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/list/Registro ', RegistroList::class)->name('registro.list');
=======



>>>>>>> f517e12367294b5cce3f9ce7de2312e2b1656df6





Route::get('/', Dashboard::class);

Route::get('/sensorcreate', SensorCreate::class);

Route::get('/sensorlist', SensorList::class)->name('sensor.list');

Route::get('/sensoredit{id}', SensorList::class)->name('sensor.edit');

Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');

Route::get('/ambiente/{id}/edit', AmbienteEdit::class)->name('ambiente.edit');

Route::get('/ambiente/list', AmbienteList::class)->name('ambiente.list');


//sensores


