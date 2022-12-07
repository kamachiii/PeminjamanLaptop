<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PeminjamController::class , 'index']);
Route::get('/create',[PeminjamController::class , 'create']);
Route::post('/store-peminjaman',[PeminjamController::class, 'storePeminjaman'])->name('storePeminjaman');

