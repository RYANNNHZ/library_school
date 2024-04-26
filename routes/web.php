<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\adminonly;
use App\Http\Middleware\checkrole;
use App\Http\Middleware\isHasLogin;
use App\Http\Middleware\isLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('library', LibraryController::class)->middleware(isLogin::class);
Route::controller(LibraryController::class)->group(function () {
    Route::get('/admin', 'admin')->middleware(isLogin::class)->middleware(checkrole::class);
    Route::get('/addPetugas', 'addPetugas')->middleware(isLogin::class)->middleware(checkrole::class)->middleware(adminonly::class);
    Route::post('/addPetugas/store', 'addPetugasstore')->name('addPetugas.store');
    Route::get('/addBook', 'addBook')->middleware(isLogin::class)->middleware(checkrole::class);
    Route::get('/addcategory', 'addcategory')->middleware(isLogin::class)->middleware(checkrole::class);
    Route::post('/addBook/store', 'addBookstore')->name('addbook.store');
    Route::get('/Udashboard/{id}','Udashboard')->middleware(isLogin::class);
    Route::get('/bookmark/{id}','bookmark')->middleware(isLogin::class);
    Route::post('/addcategory/store', 'storecategory');
    Route::get('/del/{id}', 'del');
    Route::get('/del/{id}/category', 'delcategory');
    Route::get('/cari','cari');
});


Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'login')->middleware(isHasLogin::class);
    Route::post('/session/store', 'store');
    Route::get('/register', 'register')->middleware(isHasLogin::class);
    Route::post('/session/register', 'storeregis');
    Route::get('/logout', 'logout');
});
