<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;


Route::get('/', [ViewsController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
