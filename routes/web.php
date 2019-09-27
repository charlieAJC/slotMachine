<?php

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

Route::get('/', function () {
    return view('fronted.register');
})->name('register');

Route::get('login', function () {
    return view('fronted.login');
})->name('login');

Route::get('index', function () {
    return view('fronted.index');
})->name('index');

Route::post('index/show', "regis@regis");

