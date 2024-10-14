<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::post('/confirm', [MainController::class, 'confirm']);
Route::post('/thanks', [MainController::class, 'create']);

Route::get('/admin', [MainController::class, 'admin'])->middleware('auth');
Route::delete('/delete', [MainController::class, 'delete'])->middleware('auth');
