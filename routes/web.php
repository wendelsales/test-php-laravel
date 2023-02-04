<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])
        ->name('user.login');

Route::get('/dashboard', [DashController::class, 'index'])
            ->name('dashboard')
            ->middleware(['auth']);