<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-camera', function () {
    return view('test-camera');
});



use App\Http\Controllers\AuthController;

// Route Tamu (Belum Login)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Sementara untuk Halaman Setelah Login
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return "Selamat datang di Dashboard Admin Exscurty Test!";
    });

    Route::get('/participant/exam', function () {
        return "Selamat datang di Halaman Ujian";
    });
});