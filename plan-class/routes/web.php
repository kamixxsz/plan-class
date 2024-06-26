<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\LivrosController;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/cadastro', function() {
    return view('register');
});

Route::post('/cadastro', [UserRegisterController::class, 'store'])->name('register');

Route::get('/dashboard', [LivrosController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/create', [LivrosController::class, 'create'])->name('create');
Route::post('/store', [LivrosController::class, 'store'])->name('store');
Route::get('/{id}/edit', [LivrosController::class, 'edit'])->name('edit');
Route::put('/{id}/update', [LivrosController::class, 'update'])->name('update');
Route::delete('/{id}/destroy', [LivrosController::class, 'destroy'])->name('destroy');
