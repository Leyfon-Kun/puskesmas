<?php

use App\Http\Controllers\authController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});