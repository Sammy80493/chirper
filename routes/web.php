<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChirpController::class, 'index'])->name('home');
Route::post('/chirp', [ChirpController::class, 'store']);
Route::get('/chirp/{chirp}/edit', [ChirpController::class, 'edit']);
Route::patch('/chirp/{chirp}', [ChirpController::class, 'update']);
Route::delete('/chirp/{chirp}', [ChirpController::class, 'destroy']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest')->name('login.store');

Route::post('/logout',[LoginController::class,'sign_out'])->middleware('auth')->name('logout');
