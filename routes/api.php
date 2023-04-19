<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
//    Route::get('/users', [UsersController::class, 'get'])->name('users.get');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/users', [UsersController::class, 'get'])->name('users.get');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');
