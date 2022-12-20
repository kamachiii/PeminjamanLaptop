<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaboranController;
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


//peminjam
Route::get('/',[PeminjamController::class , 'index'])->name('index');
Route::get('/create',[PeminjamController::class , 'create'])->name('create');
Route::get('/list-peminjaman',[PeminjamController::class , 'indexPeminjaman'])->name('indexPeminjaman');
Route::post('/store-peminjaman',[PeminjamController::class, 'storePeminjaman'])->name('storePeminjaman');

//login
Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/loginStore', [LoginController::class, 'store'])->name('loginStore');
});

//laboran
Route::post('/approve-peminjaman',[LaboranController::class, 'approvePeminjaman'])->name('approve');


//admin indexDataLaboran storeDataLaboran deleteLaboranData createDataLaptop
Route::middleware('auth')->group(function(){
    Route::get('/index',[AdminController::class, 'indexPeminjaman'])->name('peminjaman');
    Route::get('/indexDataLaptop',[AdminController::class, 'indexDataLaptop'])->name('dataLaptop');
    Route::get('/indexDataLaboran',[AdminController::class, 'indexDataLaboran'])->name('account');
    Route::get('/create-account-laboran',[AdminController::class, 'createDataLaboran'])->name('createAccount');
    Route::post('/store-account-laboran',[AdminController::class, 'storeDataLaboran'])->name('storeDataLaboran');

    Route::get('/edit-laboran/{id}',[AdminController::class, 'editLaboranData'])->name('editLaboran');
    Route::post('/update-laboran/{id}',[AdminController::class, 'updateLaboranData'])->name('updateLaboranData');
    Route::get('/delete-laboran/{id}',[AdminController::class, 'deleteLaboranData'])->name('deleteLaboranData');

    Route::get('/create-data-laptop',[AdminController::class, 'createDataLaptop'])->name('createDataLaptop');
    Route::post('/store-data-laptop',[AdminController::class, 'storeDataLaptop'])->name('storeDataLaptop');
    Route::get('/delete-laptop/{id}',[AdminController::class, 'deleteLaptopData'])->name('deleteLaptopData');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
