<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

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

Route::get('/satu', [CollectionController::class,'collectionSatu']);
Route::get('/dua', [CollectionController::class,'collectionDua']);
Route::get('/tiga', [CollectionController::class,'collectionTiga']);
Route::get('/empat', [CollectionController::class,'collectionEmpat']);
Route::get('/lima', [CollectionController::class,'collectionLima']);
Route::get('/enam', [CollectionController::class,'collectionEnam']);
Route::get('/exercise', [CollectionController::class,'exercise']);
