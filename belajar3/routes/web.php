<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', [PageController::class,"index"]);
Route::get('/murid', [PageController::class,"tampil"]);
Route::get('coba-facade', [PageController::class,"cobaFacade"]);
Route::get('coba-class', [PageController::class,"cobaClass"]);
Route::get('/siswa', [MahasiswaController::class,"siswa"])->name('siswa');
Route::get('/dosen', [MahasiswaController::class,"dosen"])->name('dosen');
Route::get('/gallery', [MahasiswaController::class,"gallery"])->name('gallery');
Route::get('/informasi/{fakultas}/{jurusan}', [MahasiswaController::class,"info"])->name('info');

