<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'contact']);

// Route::get('/company', [CompanyController::class, 'company']);

Route::get('/service', [ServiceController::class, 'service']);

Route::get('/', [BarangController::class, 'barang']);

Route::get('/company', [PegawaiController::class, 'pegawai']);
