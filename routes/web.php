<?php

use App\Http\Controllers\ApoterkerController;
use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoketController;
use App\Models\Apoterker;
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
route::middleware(['auth'])->group(function () {

    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    //index
    //loketindex
    Route::get('/loket/registrasi', [LoketController::class, 'indexpasien']);
    //apotekerindex
    Route::get('/apoteker/list', [ApoterkerController::class, 'indexobat']);

    //tambah
    //tambahloket
    Route::get('/loket/pasien', [LoketController::class, 'createpasien']);
    Route::post('/loket/registrasi', [LoketController::class, 'save']);


    //hapus
    //hapusloket
    Route::get('/loket/registrasi/{id}', [LoketController::class, 'delete']);
    Route::get('/apoteker/list/{id}', [ApoterkerController::class, 'delete']);

    //edit
    //edittoket
    Route::get('/loket/registrasi/edit/{id}', [LoketController::class, 'update']);
    Route::put('/loket/registrasi/edit/{id}', [LoketController::class, 'edit']);
});
