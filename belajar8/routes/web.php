<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MiddleController;
use App\Http\Controllers\SessionController;
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

Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
Route::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');

Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);
Route::post('/file-upload', [FileUploadController::class, 'prosesFileUpload']);
Route::get('/file-upload-rename', [FileUploadController::class, 'fileUploadRename']);
Route::post('/file-upload-rename', [FileUploadController::class, 'prosesFileUploadRename']);

Route::get('/daftar-mahasiswa', [MiddleController::class, 'daftarMahasiswa']);
Route::get('/tabel-mahasiswa', [MiddleController::class, 'tabelMahasiswa']);
Route::get('/blog-mahasiswa', [MiddleController::class, 'blogMahasiswa']);

Route::get('/', [SessionController::class, 'index']);
Route::get('/buat-session', [SessionController::class, 'buatSession']);
Route::get('/akses-session', [SessionController::class, 'aksesSession']);
Route::get('/hapus-session', [SessionController::class, 'hapusSession']);
Route::get('/flash-session', [SessionController::class, 'flashSession']);
