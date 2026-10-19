<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/mahasiswa', [PageController::class, 'mahasiswa']);
Route::post('/proses', [PageController::class, 'proses']);

Route::get('/courses', [PageController::class, 'courses']);
Route::get('/students', [PageController::class, 'students']);
Route::get('/grades', [PageController::class, 'grades']);
Route::get('/assignments', [PageController::class, 'assignments']);