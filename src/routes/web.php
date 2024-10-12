<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::get('/register', [MainController::class, 'register']);
Route::get('/login', [MainController::class, 'login']);
