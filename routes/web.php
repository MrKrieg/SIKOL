<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/testing', function () {
    return view('testing');
});


Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/dropdown', function () {
    return view('dropdown');
});
