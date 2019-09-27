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
    return view('create.create');
});
Route::get('/create',"memberController@create");
Route::get('/login',"memberController@login");

// Route::get('/', "HomeController@create");
