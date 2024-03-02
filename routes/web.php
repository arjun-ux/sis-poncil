<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\Admin\AdminController;
use App\Http\Controllers\Dashboard\Admin\AdminSabaController;
use App\Http\Controllers\Dashboard\Saba\AsalSekolahController;
use App\Http\Controllers\Dashboard\Saba\BerkasController;
use App\Http\Controllers\Dashboard\Saba\OrtuController;
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
Route::get('/register-saba',[RegisterController::class,'register'])->name('register')->middleware('guest');
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
    Route::post('/data-diri/{id}',[SabaController::class,'updateDataDiri'])->name('upadateDataDiri');
    Route::get('/data-ortu', [OrtuController::class, 'index'])->name('dataOrtu');
    Route::post('/data-ortu/{id}',[OrtuController::class, 'updateOrtu'])->name('updateOrtu');
    Route::get('/asal-sekolah', [AsalSekolahController::class, 'index'])->name('asalSekolah');
    Route::post('/asal-sekolah/{id}',[AsalSekolahController::class,'updateAsalSekolah'])->name( 'updateAsalSekolah');
    Route::get('/berkas-saba', [BerkasController::class,'index'])->name('sabaBerkas');
    Route::post('/berkas-saba/{id}', [BerkasController::class, 'updateBerkas'])->name('updateBerkas');
});
// dashboard admin
Route::middleware('role:admin')->group(function(){
    Route::get('/dashmin',[AdminController::class, 'index'])->name('dashmin');
    Route::get('/saba-all', [AdminSabaController::class,'index'])->name('data_saba_all');
    Route::get('/show-saba/{id}', [AdminSabaController::class, 'showSaba'])->name('showSaba');
});

Route::post('api/fetch-kota', [SabaController::class, 'fetchkota']);
Route::post('api/fetch-kecamatan', [SabaController::class, 'fetchKecamatan']);
Route::post('api/fetch-desa', [SabaController::class, 'fetchDesa']);
