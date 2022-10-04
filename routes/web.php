<?php

use App\Http\Controllers\FutebolController;
use App\Http\Controllers\VagasController;
use Illuminate\Support\Facades\Route;

Route::post('/vagas/store/futebol', [VagasController::class, 'storeFutebol'])->name('vagas.storeFutebol');
Route::post('/vagas/store/natacao', [VagasController::class, 'storeNatacao'])->name('vagas.storeNatacao');
Route::post('/vagas/store/volei', [VagasController::class, 'storeVolei'])->name('vagas.storeVolei');
Route::post('/vagas/store/basquete', [VagasController::class, 'storeBasquete'])->name('vagas.storeBasquete');
Route::get('/vagas', [VagasController::class, 'index'])->name('vagas.index');
Route::get('/vagas/{id}', [VagasController::class, 'show'])->name('vagas.show');
Route::get('/vagas/create/{id}', [VagasController::class, 'create'])->name('vagas.create');

Route::get('/', function () {
    return view('welcome');
});