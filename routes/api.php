<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\KampanyePemasaranController;

// Login tidak memerlukan token
Route::post('/login', [AuthController::class, 'login']);

// Endpoint yang memerlukan autentikasi
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    // GET semua kampanye
    Route::get(
        '/kampanye-pemasaran',
        [KampanyePemasaranController::class, 'index']
    );

    // POST kampanye baru
    Route::post(
        '/kampanye-pemasaran',
        [KampanyePemasaranController::class, 'store']
    );
});