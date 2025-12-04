<?php

use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteList;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;

use App\Livewire\SensorCreate;
use App\Livewire\SensorList;


use App\Livewire\Registro\RegistroList;


use App\Models\Sensor;
use Illuminate\Support\Facades\Route;


Route::get('/list/Registro ', RegistroList::class)->middleware(['auth', 'user_type:user'])->name('registro.list');

Route::get('/Dashboard', Dashboard::class)->middleware(['auth', 'user_type:user'])->name('Dashboard');

Route::get('/sensorcreate', SensorCreate::class)->middleware(['auth', 'user_type:user'])->name('sensor.create');

Route::get('/sensorlist', SensorList::class)->middleware(['auth', 'user_type:user'])->name('sensor.list');

Route::get('/sensoredit{id}', SensorList::class)->middleware(['auth', 'user_type:user'])->name('sensor.edit');

Route::get('/ambiente/create', AmbienteCreate::class)->middleware(['auth', 'user_type:user'])->name('ambiente.create');

Route::get('/ambiente/{id}/edit', AmbienteEdit::class)->middleware(['auth', 'user_type:user'])->name('ambiente.edit');

Route::get('/ambiente/list', AmbienteList::class)->middleware(['auth', 'user_type:user'])->name('ambiente.list');

Route::get('/', Login::class)->name('login');
