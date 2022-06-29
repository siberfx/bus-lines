<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('company', App\Http\Controllers\CompanyController::class)->only(['show', 'index']);
Route::resource('line', App\Http\Controllers\LineController::class)->only(['create', 'store', 'show']);
