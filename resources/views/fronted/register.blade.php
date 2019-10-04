@extends('fronted.layouts.master')

@section('title', 'register')

@section('content')
<div class="row">
    <div class="col-sm-7 carousel slide" id="demo" data-ride="carousel">
        <div class="slideGrp">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1" class=""></li>
                <li data-target="#demo" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://fakeimg.pl/1920x1080" width="100%" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="https://fakeimg.pl/1920x1080" width="100%" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="https://fakeimg.pl/1920x1080" width="100%" height="100%">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="col-sm-5" id="form-signin">
        <form id="user_register" method="POST">
            @csrf
            <img class="mb-4" src="img/fronted/gambler.png" alt="" width="80" height="80" style="align:left">
            <h1 class="h3 mb-3 font-weight-normal">註冊帳號</h1>
            <input type="name" id="name" class="form-control" placeholder="姓名" required autofocus><span
                class='error1'></span><br>
            <input type="account" id="account" class="form-control" placeholder="帳號" required><span
                class='error2'></span><br>
            {{-- <label for="email" class="sr-only">電子郵件地址</label><input type="text" id="inputEmail" class="form-control" placeholder="電子郵件地址" required><span class='error3'></span><br> --}}
            <input type="password" id="password" class="form-control" placeholder="密碼" required><span
                class='error4'></span><br>
            {{-- <label><input type="checkbox" value="remember-me">記住我</label> --}}
            <button type="button" id="register" class="btn btn-info btn-primary btn-block">送出</button><br>
            <button type="button" class="btn btn-light"><a href="login">登入帳號</a></button>
            <button type="button" id="index" class="btn btn-light"><a href="/">回首頁</a></button>
            <div id="register_success" style="display:none;"></div>
        </form>
        <div id="errormsg" style="color: red"></div>
    </div>
</div>
@endsection
