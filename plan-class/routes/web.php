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

Route::get('/dashboard', [LivrosController::class, 'dashboard'])->name('dashboard');
Route::get('create', [LivrosController::class, 'create'])->name('create');
Route::get('{id}/edit', [LivrosController::class, 'edit'])->name('edit');
Route::put('{id}/update', [LivrosController::class, 'update'])->name('update');
Route::delete('{id}/destroy', [LivrosController::class, 'destroy'])->name('destroy');
Route::post('store', [LivrosController::class, 'store'])->name('store');


