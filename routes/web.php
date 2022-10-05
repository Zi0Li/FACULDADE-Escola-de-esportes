<?php

use App\Http\Controllers\VagasController;
use Illuminate\Support\Facades\Route;

Route::delete('/vagas/delete/Futebol/{id}', [VagasController::class, 'deleteFutebol'])->name('vagas.deleteFutebol');
Route::delete('/vagas/delete/Natacao/{id}', [VagasController::class, 'deleteNatacao'])->name('vagas.deleteNatacao');
Route::delete('/vagas/delete/Volei/{id}', [VagasController::class, 'deleteVolei'])->name('vagas.deleteVolei');
Route::delete('/vagas/delete/Basquete/{id}', [VagasController::class, 'deleteBasquete'])->name('vagas.deleteBasquete');

Route::put('/vagas/Futebol/{id}', [VagasController::class, 'updateFutebol'])->name('vagas.updateFutebol');
Route::put('/vagas/Natacao/{id}', [VagasController::class, 'updateNatacao'])->name('vagas.updateNatacao');
Route::put('/vagas/Volei/{id}', [VagasController::class, 'updateVolei'])->name('vagas.updateVolei');
Route::put('/vagas/Basquete/{id}', [VagasController::class, 'updateBasquete'])->name('vagas.updateBasquete');

Route::get('/vagas/editFutebol/{id}', [VagasController::class, 'editFutebol'])->name('vagas.editFutebol');
Route::get('/vagas/editNatacao/{id}', [VagasController::class, 'editNatacao'])->name('vagas.editNatacao');
Route::get('/vagas/editVolei/{id}', [VagasController::class, 'editVolei'])->name('vagas.editVolei');
Route::get('/vagas/editBasquete/{id}', [VagasController::class, 'editBasquete'])->name('vagas.editBasquete');

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