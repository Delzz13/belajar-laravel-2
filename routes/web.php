<?php

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [homecontroller::class, 'index'])->name('home');
Route::get('/user/{id}', [homecontroller::class, 'show'])->name('users.show');
//alamat baru untuk fitur
//name untuk membuat alamat baru
Route::get('/fitur', function (){
    return view('feature');
})->name('feature');
