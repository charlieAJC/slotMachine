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
// Route::get('/', function () {
//     return view('fronted.index');
// })->name('index');

// Route::get('register', function () {
//     return view('fronted.register');
// })->name('register');

// Route::get('login', function () {
//     return view('fronted.login');
// })->name('login');


//首頁
Route::get('/', function () {
    return view('fronted.index');
});

//註冊
Route::get('/register', function () {
    return view('fronted.register');
});
Route::post('/create',"memberController@create");

//登入
Route::get('/login', function () {
    return view('fronted.login');
});
Route::post('/login',"memberController@login");
// Route::get('/login',"memberController@login");

// ------景翔的拉霸機測試用route------
Route::get('slot', function () {
    return view('slot.slot');
});
Route::post('slot', "SlotController@slot");
// ------景翔的拉霸機測試用route------

// ------小瑪莉route-------
Route::get('/LittleMary', "MaryController@index");
Route::get('/LittleMary/test', "MaryController@test");
