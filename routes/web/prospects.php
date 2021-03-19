<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Prospects\ProspectController;

// Prefix: prospects
// name : admin.prospects.

Route::get('/', [ProspectController::class, 'index'])->name('dashboard');
Route::get('create', [ProspectController::class, 'create'])->name('create');
Route::post('/', [ProspectController::class, 'store'])->name('store');