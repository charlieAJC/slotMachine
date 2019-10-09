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

//登出
Route::post('/logout',"memberController@logout");

//遊戲介紹
Route::get('/game', function () {
    return view('fronted.game');
});
Route::post('/game',"memberController@game");

//最新消息
Route::get('/news', function () {
    return view('fronted.news');
});
Route::post('/news',"memberController@news");


Route::group(['middleware'=>'Permission'],function(){
    //儲值
    Route::get('/buy', function () {return view('fronted.buy');});
    Route::post('/buy',"memberController@buy");
    // ------景翔的拉霸機測試用route------
    Route::get('slot', function () {
        return view('slot.slot');
    });
    Route::post('slot', "SlotController@slot");
    // ------景翔的拉霸機測試用route------
    
    // ------小瑪莉route-------
    Route::get('/LittleMary', function () {
        return view('Marry.Marry');
    });
    Route::post('/LittleMary', "MaryController@test");

});



//客服
Route::get('/contact', function () {
    return view('fronted.contact');
});
Route::post('/contact',"memberController@contact");

