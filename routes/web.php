<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataDukungController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\StattusController;
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

// route khusus controller login dan register
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'loginProses');
    Route::post('register/proses', 'registerProses');
    Route::post('logout', 'logout');
});



// middleware -> untuk membatasi user
Route::group(['middleware' => ['auth']], function () {

    // jika levelnya 1 boleh mengakses route berikut, selain level 1 tidak bisa mengakses
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('dashboard', DashboardController::class);
    });

    // jika levelnya 2 boleh mengakses route berikut, selain level 2 tidak bisa mengakses
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('home', HomeController::class);
        Route::resource('status', StattusController::class);
        Route::resource('kebijakan', KebijakanController::class);
        Route::resource('data-dukung', DataDukungController::class);
        Route::resource('bantuan', BantuanController::class);

        // Route::get('logout', AuthController::class, 'logout');
    });
});
