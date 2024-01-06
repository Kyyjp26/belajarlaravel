<?php

use App\Http\Controllers\DataController;
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

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('/data', [DataController::class, 'index'])->name('data.index');
Route::get('/data/create', [DataController::class, 'create'])->name('data.create');
Route::post('/data', [DataController::class, 'store'])->name('data.store');
Route::get('/data/{data}/edit', [DataController::class, 'edit'])->name('data.edit');
Route::put('/data/{data}', [DataController::class, 'update'])->name('data.update');
Route::delete('/data/{data}', [DataController::class, 'destroy'])->name('data.destroy');
