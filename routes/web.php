<?php

use Illuminate\Support\Facades\Route;

Route::get('/vagas', [VagasController::class, 'index'])->name('vagas.index');

Route::get('/', function () {
    return view('welcome');
});
