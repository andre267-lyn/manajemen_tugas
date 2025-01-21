<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function() {
    Route::post('/register', [AuthController::class, 'register']); // Endpoint untuk mendaftar
    Route::post('/login', [AuthController::class, 'login']); // Endpoint untuk login
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api'); // Logout user
    Route::post('/refresh', [AuthController::class, 'refresh']); // Perbarui JWT token
});

Route::group(['middleware' => 'auth:api'], function() {
    Route::apiResource('/tasks', TaskController::class); // CRUD untuk task
});
