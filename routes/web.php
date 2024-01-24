<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\Admin\AdminController;
use App\Http\Controllers\Dashboard\Saba\SabaController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/unauthorize', function() {
    return view('auth.unathorize');
})->name('unauthorized-page');

// auth register
Route::get('/register-saba',[RegisterController::class,'register'])->name('register');
Route::post('/register-saba',[RegisterController::class,'doRegister'])->name('doRegister');
// auth login
Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'doLogin'])->name('doLogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// dashboard saba
Route::middleware('role:saba')->group(function(){
    // dashboard saba
    Route::get('/dashba',[SabaController::class,'index'])->name('dashba');
    Route::get('/data-diri',[SabaController::class,'data_diri'])->name('data-diri');
});
// dashboard admin
Route::middleware('role:admin')->group(function(){
    Route::get('/dashmin',[AdminController::class, 'index'])->name('dashmin');
});
