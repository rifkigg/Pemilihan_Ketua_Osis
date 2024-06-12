<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KetosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VotingController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [HomeController::class, 'test'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard')->middleware(['auth','admin']);
Route::get('admin/pengguna', [HomeController::class, 'pengguna'])->name('admin.pengguna')->middleware(['auth','admin']);
Route::get('admin/ketos', [HomeController::class, 'ketos'])->name('admin.ketos')->middleware(['auth','admin']);

Route::get('admin/insert', [UserController::class, 'index'])->name('admin.insert')->middleware(['auth','admin']);
Route::post('admin/insert', [UserController::class, 'store'])->name('admin.insert')->middleware(['auth','admin']);
Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware(['auth','admin']);
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update')->middleware(['auth','admin']);
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy')->middleware(['auth','admin']);

Route::get('admin/insertKetos', [KetosController::class, 'create'])->name('admin.insertKetos')->middleware(['auth','admin']);
Route::post('admin/insertKetos', [KetosController::class, 'store'])->name('admin.insertKetos')->middleware(['auth','admin']);
Route::get('ketos/{id}/edit', [KetosController::class, 'edit'])->name('ketos.edit')->middleware(['auth','admin']);
Route::put('ketos/{id}', [KetosController::class, 'update'])->name('ketos.update')->middleware(['auth','admin']);
Route::delete('ketos/{id}', [KetosController::class, 'destroy'])->name('ketos.destroy')->middleware(['auth','admin']);

Route::get('voting', [VotingController::class, 'index'])->name('voting')->middleware('auth');
Route::get('voting/{id}', [VotingController::class, 'show'])->name('voting.show')->middleware('auth');
Route::post('voting/vote', [VotingController::class, 'vote'])->name('voting.vote');
// Route::get('admin/dashboard', [VotingController::class, 'results'])->name('voting.results');