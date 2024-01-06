<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/login', [MahasiswaController::class, 'login']);
Route::post('/login', [MahasiswaController::class, 'prosesLogin']);

Route::get('/logout', [MahasiswaController::class, 'logout']);

Route::redirect('/', '/login');

Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa'])->middleware('login');
Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'tabelMahasiswa'])->middleware('login');
Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa'])->middleware('login');
