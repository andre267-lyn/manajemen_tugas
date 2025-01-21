<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route untuk halaman utama (home)
Route::get('/', function () {
    return view('welcome');  // Halaman utama yang Anda buat
});

// Route untuk login dan register (menampilkan form login dan register)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('auth.register');

// Middleware untuk route yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {
    // Route untuk melihat daftar tugas
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
});
