<?php

use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteList;
use App\Livewire\Dashboard;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/ambientecreate', AmbienteCreate::class)->name('ambiente.create');

Route::get('/ambiente/{id}/edit', AmbienteEdit::class)->name('ambiente.edit');

Route::get('/ambientelist', AmbienteList::class)->name('ambiente.list');
