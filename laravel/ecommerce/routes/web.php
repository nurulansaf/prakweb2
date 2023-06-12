<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PublikController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InputController;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;

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
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Siang Pak Rojul";
});

Route::get('/about', function () {
    return "Nurul Anisa Fitriya - SI01";
});

Route::get('/tentang', function () {
    return view('tentang', [
        "nama" => "Nurul Anisa Fitriya",
        "umur" => 20
    ]);
});

Route::get('/nf', function () {
    return view('nf', [
        "nama" => "STT Terpadu Nurul Fikri",
        "prodi" => "
        Sistem Informasi,
        Teknik Informatika &
        Bisnis Digital
        "
    ]);
});

Route::get('/TugasTable', function () {
    return view('table');
});

// TUGAS W9
Route::prefix('Mahasiswa')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index']);
    Route::post('/output_form', [MahasiswaController::class, 'output_form']);
});

// dashboadr

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
});

Route::prefix('Publik')->group(function () {
    Route::get('/Home', [PublikController::class, 'index']);
    Route::get('/tentang', [PublikController::class, 'tentangKami']);
});

Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']); 
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']); 
Route::post('/produk/update/{id}', [ProdukController::class, 'update']); 
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);