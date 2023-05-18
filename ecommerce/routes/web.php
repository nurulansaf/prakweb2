<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
