<?php

use App\Http\Controllers\ColaboradorController;
use Illuminate\Support\Facades\Route;

//rota para página inicial
Route::get('/', function () {
    return view('welcome');
})->name('home');

// USUÁRIOS
Route::get('/index-colaborador', [ColaboradorController::class, 'index'])->name('colaborador.index');
Route::get('/create-colaborador', [ColaboradorController::class, 'create'])->name('colaborador.create');
Route::post('/store-colaborador', [ColaboradorController::class, 'store'])->name('colaborador.store');
Route::get('/show-colaborador/{colaborador}', [ColaboradorController::class, 'show'])->name('colaborador.show');
Route::get('/edit.colaborador/{colaborador}', [ColaboradorController::class, 'edit'])->name('colaborador.edit');
Route::put('/update.colaborador/{colaborador}', [ColaboradorController::class, 'update'])->name('colaborador.update');
Route::delete('/destroy-colaborador/{colaborador}', [ColaboradorController::class, 'destroy'])->name('colaborador.destroy');
