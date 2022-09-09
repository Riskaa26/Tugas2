<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('template2.home');
});


Route::get('/login', function () {
    return view('template2.login');
});

Route::get('/product', function () {
    return view('template2.product');
});

Route::get('/homepage', function () {
    return view('template2.homepage');
});
