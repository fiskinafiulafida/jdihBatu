<?php

use App\Http\Controllers\JDIHController;
use App\Http\Controllers\LoginController;
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
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('/', [LoginController::class, 'dologin']);
});

// guest yang akan melakukan logout
Route::group(['middleware' => ['auth', 'checkrole:operator,pengelolahbantuanhukum,analisishukum,obh,kabag,kuasahukumpemkot,staffdokumentasi,kasubaghukum,kepalapublikasi,staffhukum,pemohon']], function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/redirect', [LoginController::class, 'cek']);
});

// dahboard pemohon
Route::resource('/pemohon', PemohonController::class)->middleware('checkrole:pemohon');

// Halaman yang tidak perlu Login dan Register
// dashboard halaman awal sebelum login
Route::resource('/dashboardjdih', JDIHController::class);
