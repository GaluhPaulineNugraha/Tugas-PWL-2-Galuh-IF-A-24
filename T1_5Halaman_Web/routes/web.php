<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/beranda', function() {
    return view('beranda');
})->name('beranda');

Route::get('/menu', function() {
    return view('menu');
})->name('menu');

Route::get('/pesan', function() {
    return view('pesan');
})->name('pesan');

Route::get('/staff', function() {
    return view('staff');
})->name('staff');

Route::get('/tentang', function() {
    return view('tentang');
})->name('tentang');

