<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/registration', [UserController::class, 'registration'])->withoutMiddleware('auth:sanctum');
Route::get('/profile', [UserController::class, 'profile']);
