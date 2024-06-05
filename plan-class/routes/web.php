<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])
    ->name('login');

Route::post('logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('cadastro', function(){
    return view('register');});

Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');
    
Route::get('/dashboard', function () {
    return view('dashboard');
});