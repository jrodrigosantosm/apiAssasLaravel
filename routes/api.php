<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cepController;

Route::resource('cepController', cepController::class);

Route::get('/cep/{}', [cepController::class, 'show'])->name('cep.show');



