<?php

namespace App\Http\Controllers;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])
    ->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('cadastro', function(){
    return view('register');});

Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');
    
Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');

