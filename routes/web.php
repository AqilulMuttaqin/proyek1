<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FlowController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\KuotaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [LoginController::class, 'logout']);
Route::middleware(['auth', 'ceklevel:admin'])->group(function(){
    Route::get('/booking', [BookingController::class, 'index']);
});
Route::middleware(['auth', 'ceklevel:admin,user'])->group(function(){
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/information', [InformationController::class, 'index']);
    Route::get('/gallery', [GalleryController::class, 'index']);
    Route::get('/flow', [FlowController::class, 'index']);
    Route::get('/booking', [BookingController::class, 'index']);
    Route::get('/cek-kuota', [KuotaController::class, 'cekKuota'])->name('cek-kuota');
    Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
});
