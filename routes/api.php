<?php

use App\Livewire\Registro\RegistroList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/list/Registro ', RegistroList::class)->name('lista');