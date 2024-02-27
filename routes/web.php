<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\UangSakuController;
use App\Models\Santri;
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
Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');

Route::get('/bendahara', function () {
    return view('bendahara.index',[
        'title'     => 'Bendahara'
    ]);
});

Route::resource('/santri', SantriController::class);
Route::resource('/bendahara/spp', SppController::class);
Route::resource('/bendahara/uang-saku', UangSakuController::class);
