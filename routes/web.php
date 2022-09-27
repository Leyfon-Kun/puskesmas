<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//login
Route::get('/', [authController::class, 'loginUI']);
Route::post('/', [authController::class, 'loginCheck']);

//dashboard
Route::get('/dashboard/home', [DashboardController::class, 'index']);

//Loket
Route::get('/loket/pasien', [LoketController::class, 'indexregistrasipasien']);
Route::get('/loket/registrasi', [LoketController::class, 'indexpasien']);

