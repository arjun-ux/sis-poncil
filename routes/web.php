<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\SabaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SantriBaruController;
use App\Http\Controllers\Auth\LoginSantriController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

// auth register
Route::get('/register-saba',[RegisterController::class,'register'])->name('register');
Route::post('/register-saba',[RegisterController::class,'doRegister'])->name('doRegister');
// auth login
Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'doLogin'])->name('doLogin');
// dashboard saba
Route::middleware('role:saba,admin')->group(function(){
    // dashboard saba
    Route::get('/dashba',[SabaController::class,'index'])->name('dashba')->middleware('auth');
});
// dashboard admin
Route::middleware('role:admin')->group(function(){
    Route::get('/dashmin',[AdminController::class, 'index'])->name('dashmin')->middleware('auth');
});
