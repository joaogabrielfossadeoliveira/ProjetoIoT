<?php

use App\Livewire\Dashboard;
use App\Livewire\Registro\RegistroList;
use Illuminate\Support\Facades\Route;

Route::get('/list/Registro ', RegistroList::class)->name('lista');