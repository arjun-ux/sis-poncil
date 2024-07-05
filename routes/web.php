<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Dashboard\Admin\AdminController;
use App\Http\Controllers\Dashboard\Admin\AdminSabaController;
use App\Http\Controllers\Dashboard\Saba\AsalSekolahController;
use App\Http\Controllers\Dashboard\Saba\BerkasController;
use App\Http\Controllers\Dashboard\Saba\OrtuController;
use App\Http\Controllers\Dashboard\Saba\SabaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
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
    // dashboard
    Route::get('/dashmin',[AdminController::class, 'index'])->name('dashmin');
    // data santri
    Route::get('/saba-all', [AdminSabaController::class,'index'])->name('data_saba_all');
    Route::get('/getAllSantri', [AdminSabaController::class, 'getAllSantri']);
    Route::get('/create', [AdminSabaController::class, 'create'])->name('create_saba');
    Route::post('/store-santri', [AdminSabaController::class, 'store'])->name('store_santri');
    Route::get('/show-saba/{id}', [AdminSabaController::class, 'showSaba'])->name('showSaba');
    Route::post('/saba/{id}/update', [AdminSabaController::class, 'updateSaba'])->name('updateSaba');
    // cek saudara kandung
    Route::post('/saudara-kandung/{nokk}', [AdminSabaController::class, 'cekSaudaraKandung']);
    Route::post('/updateSaudaraKandung', [AdminSabaController::class, 'updateSaudaraKandung']);
    // berkas
    Route::get('/berkas', [AdminSabaController::class, 'createBerkas'])->name('berkas.index');
    Route::post('/berkas', [AdminSabaController::class, 'store_berkas'])->name('store.berkas');
    // user
    Route::get('/user', [UserController::class, 'santri'])->name('user.index');
    Route::get('/admin', [UserController::class, 'admin'])->name('admin.index');
});
// pekerjaan
Route::get('/pekerjaan', [PekerjaanController::class, 'getAll']);
// pendidikan
Route::get('/pendidikan', [PendidikanController::class, 'getAll']);
