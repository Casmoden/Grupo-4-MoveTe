<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/aboutUs', [PageController::class, 'aboutUs'])->name('aboutUs');

Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('/healthAdvice', [PageController::class, 'healthAdvice'])->name('healthAdvice');

Route::get('/regulationsSafety', [PageController::class, 'regulationsSafety'])->name('regulationsSafety');

Route::get('/walkerCode', [PageController::class, 'walkerCode'])->name('walkerCode');
