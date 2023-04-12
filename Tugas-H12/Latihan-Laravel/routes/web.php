<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//http://127.0.0.1:8000

Route::get('/', [HomeController::class, 'home']);

Route::get('/register', [AuthController::class, 'register']);

Route::get('/welcome2', [AuthController::class, 'welcome2']);

