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
Route::get('/', [authController::class, 'loginUI'])->name('login')->middleware('guest');
Route::post('/', [authController::class, 'loginCheck']);
//logout
Route::get('/logout', [authController::class, 'logout']);
route::middleware(['auth'])->group(function() {

    //dashboard
    Route::get('/dashboard/home', [DashboardController::class, 'index']);

    //Loket
    Route::get('/loket/pasien', [LoketController::class, 'createpasien']);
    Route::get('/loket/registrasi', [LoketController::class, 'indexpasien']);
    Route::post('/loket/registrasi', [LoketController::class, 'save']);

});
