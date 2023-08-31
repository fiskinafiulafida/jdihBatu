<?php

use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KepalaPublikasiController;
use App\Http\Controllers\KepPubkikasiBeritaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JDIHController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyaratakatController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\RegisterController;
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

Route::resource('/register', RegisterController::class)->middleware('guest');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [LoginController::class, 'index'])->name('beranda');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'dologin']);
});

// guest yang akan melakukan logout
Route::group(['middleware' => ['auth', 'checkrole:operator,pengelolahbantuanhukum,analisishukum,obh,kabag,kuasahukumpemkot,staffdokumentasi,kasubaghukum,kepalapublikasi,staffhukum,pemohon']], function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/redirect', [LoginController::class, 'cek']);
});
// operator
Route::resource('/operator', OperatorController::class)->middleware('checkrole:operator');
Route::resource('/berita', BeritaController::class)->middleware('checkrole:operator');

// kepalapublikasi
Route::group(['middleware' => ['auth', 'checkrole:kepalapublikasi']], function () {
    Route::get('/kepalapublikasi', [KepalaPublikasiController::class, 'index']);
});
Route::resource('/kepalapublikasiberita', KepPubkikasiBeritaController::class)->middleware('checkrole:kepalapublikasi');

// Profile User
Route::resource('/profile', ProfileController::class)->middleware('auth');

// Password
Route::resource('/password', PasswordController::class)->middleware('auth');
Route::post('/change-password', [App\Http\Controllers\PasswordController::class, 'update'])->name('update-password')->middleware('auth');

// dahboard pemohon
Route::resource('/pemohon', PemohonController::class)->middleware('checkrole:pemohon');
// pemohohon
Route::resource('/bantuanMasyarakat', MasyaratakatController::class)->middleware('checkrole:pemohon');

// Halaman yang tidak perlu Login dan Register
// dashboard halaman awal sebelum login
Route::resource('/dashboardjdih', JDIHController::class);

Route::get('/faq', [App\Http\Controllers\JDIHController::class, 'faq'])->name('FAQ');
Route::get('/profiljdih', [App\Http\Controllers\JDIHController::class, 'profiljdih'])->name('Profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
