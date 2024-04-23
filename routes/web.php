<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('library', LibraryController::class);
Route::get('/admin', [LibraryController::class,'admin']);
Route::get('/addPetugas', [LibraryController::class,'addPetugas']);
Route::post('/addPetugas/store', [LibraryController::class,'addPetugasstore'])->name('addPetugas.store');
Route::get('/addBook', [LibraryController::class,'addBook']);

Route::controller(SessionController::class)->group(function(){
Route::get('/login','login');
Route::post('/session/store','store');
Route::get('/register','register');
Route::post('/session/register','storeregis');
Route::get('/logout','logout');
});
