<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/sanpham', [ProductController::class, 'index'])->name('home');
Route::post('/sanpham', [ProductController::class, 'index'])->name('showHome');
Route::get('/login', function() {
    return view('login');
});

