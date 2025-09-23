<?php

use App\Http\Controllers\RegistroController;
use App\Livewire\Registro\RegistroList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/registro/controller', [RegistroController::class, "store"]);