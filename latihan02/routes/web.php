<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\SessionController;
use Doctrine\DBAL\Schema\Index;
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

Route::get('/sesi', [SessionController::class, 'index'])->middleware('isTamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create'])->middleware('isTamu');

Route::get('/', [BankController::class, 'home'])->name('bank.home')->middleware('isLogin');

Route::get('/banks', [BankController::class, 'index'])->name('bank.index')->middleware('isLogin');
Route::get('/banks/create', [BankController::class, 'create'])->name('bank.create')->middleware('isLogin');
Route::post('/banks', [BankController::class, 'store'])->name('bank.store')->middleware('isLogin');
Route::get('/banks/{bank}/edit', [BankController::class, 'edit'])->name('bank.edit')->middleware('isLogin');
Route::put('/banks/{bank}', [BankController::class, 'update'])->name('bank.update')->middleware('isLogin');
Route::delete('/banks/{bank}', [BankController::class, 'destroy'])->name('bank.destroy')->middleware('isLogin');
