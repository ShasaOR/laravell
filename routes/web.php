<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/barang', [BarangController::class, 'index']); 
Route::get('/tambahbarang', [BarangController::class, 'tambahbarang']); 
Route::post('/barang', [BarangController::class, 'simpan']); 
Route::get('/barang/{barang_id}', [BarangController::class, 'show']); 
Route::get('/barang/{barang_id}/edit', [BarangController::class, 'edit']); 
Route::put('/barang/{barang_id}', [BarangController::class, 'update']); 
Route::delete('/barang/{barang_id}', [BarangController::class, 'destroy']); 