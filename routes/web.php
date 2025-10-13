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
// submenu order
Route::get('/order/Kenangan-Beans', function () {
    return view('order.Kenangan-Beans');
});
Route::get('/order/petualangan-rasa-onepiece-tahilalats', function () {
    return view('order.petualangan-rasa-onepiece-tahilalats');
});

Route::get('/order/kiss-food-selection', function () {
    return view('order.kiss-food-selection');
});

Route::get('/order/pasal-pasanganideal', function () {
    return view('order.pasal-pasanganideal');
});

Route::get('/order/pesta-cashback', function () {
    return view('order.pesta-cashback');
});

Route::get('/order/outlets', function () {
    return view('order.outlets');
});

Route::get('/order/big-order', function () {
    return view('order.big-order');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about/news', function () {
    return view('about.news');
});

Route::get('/about/kenangan-academy', function () {
    return view('about.kenangan-academy');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/download', function () {
    return view('download');
});