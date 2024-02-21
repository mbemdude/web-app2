<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/

// Login Session
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class, 'login_proses'])->name('login-proses');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');

Route::get('/pembayaran', function () {
    return view('pembayaran.index');
});

Route::get('/santri', [SantriController::class,'index'])->name('login');