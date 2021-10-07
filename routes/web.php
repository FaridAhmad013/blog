<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
});
