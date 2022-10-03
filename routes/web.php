<?php

use App\Http\Controllers\VagasController;
use Illuminate\Support\Facades\Route;

Route::get('/vagas', [VagasController::class, 'index'])->name('vagas.index');
Route::get('/vagas/{id}', [VagasController::class, 'show'])->name('vagas.show');

Route::get('/', function () {
    return view('welcome');
});