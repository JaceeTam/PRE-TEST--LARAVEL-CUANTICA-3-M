<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'HOLA';
});

Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'store']);

use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index']);
