<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/conselhos', [PageController::class, 'conselhos'])->name('conselhos');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');

Route::get('/guiaPraticante', [PageController::class, 'guiaPraticante'])->name('guiaPraticante');

Route::get('/quemSomos', [PageController::class, 'quemSomos'])->name('quemSomos');

Route::get('/segurancaRegulamento', [PageController::class, 'segurancaRegulamento'])->name('segurancaRegulamento');
