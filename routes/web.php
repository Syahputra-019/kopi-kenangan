<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home
    ');
});

Route::get('/vip', function () {
    return view('vip');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/download', function () {
    return view('download');
});