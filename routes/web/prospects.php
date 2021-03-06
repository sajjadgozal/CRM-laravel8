<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Prospects\ProspectController;
use App\Http\Controllers\Admin\Prospects\ProspectContactController;

// Prefix: prospects
// name : admin.prospects.

Route::get('/', [ProspectController::class, 'index'])->name('dashboard');
Route::get('create', [ProspectController::class, 'create'])->name('create');
Route::post('/', [ProspectController::class, 'store'])->name('store');
Route::get('{prospect}/edit', [ProspectController::class, 'edit'])->where('prospect','[0-9]+')->name('edit');
Route::get('{prospect}', [ProspectController::class, 'show'])->where('prospect','[0-9]+')->name('show'); 
Route::put('{prospect}', [ProspectController::class, 'update'])->where('prospect','[0-9]+')->name('update');


Route::get('{prospect}/contact/create', [ProspectContactController::class , 'create'])->where('prospect','[0-9]*')->name('contact.create');
