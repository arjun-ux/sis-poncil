<?php

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
Route::get('/list-santri', [SantriBaruController::class, 'index'])->name('santri.list');
// auth
Route::get('/login-santri',[LoginSantriController::class,'index'])->name('login-santri');
