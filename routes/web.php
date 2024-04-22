<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('library', LibraryController::class);

Route::controller(SessionController::class)->group(function(){
Route::get('/login','login');
Route::post('/session/store','store');
Route::get('/register','register');
Route::post('/session/register','storeregis');
Route::get('/logout','logout');
});
