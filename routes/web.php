<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenggunaController;
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

Route::get('/', function () {
    return view('homepage');
});
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/homepage', [HomePageController::class, 'index']);

Route::get('/barang', [BarangController::class, 'index']); 
Route::get('/tambahbarang', [BarangController::class, 'tambahbarang']); 
Route::post('/barang', [BarangController::class, 'simpan']); 

Route::get('/barang/{barang_id}', [BarangController::class, 'show']); 
Route::get('/barang/{barang_id}/edit', [BarangController::class, 'edit']); 
Route::put('/barang/{barang_id}', [BarangController::class, 'update']); 
Route::delete('/barang/{barang_id}', [BarangController::class, 'destroy']); 
Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'shawLoginform'])->name('login');

Auth::routes();

Route::get('/Pengguna', [PenggunaController::class, 'index']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
