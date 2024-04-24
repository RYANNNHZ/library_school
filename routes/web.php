<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\isLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('library', LibraryController::class);
Route::controller(LibraryController::class)->group(function () {
    Route::get('/admin', 'admin')->middleware(isLogin::class);
    Route::get('/addPetugas', 'addPetugas');
    Route::post('/addPetugas/store', 'addPetugasstore')->name('addPetugas.store');
    Route::get('/addBook', 'addBook');
    Route::post('/addBook/store', 'addBookstore')->name('addbook.store');
    Route::get('/del/{id}', 'del');
});


Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/session/store', 'store');
    Route::get('/register', 'register');
    Route::post('/session/register', 'storeregis');
    Route::get('/logout', 'logout');
});
