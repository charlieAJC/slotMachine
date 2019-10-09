@extends('fronted.layouts.master')

@section('title', 'login')

@section('content')

{{-- <div class="row">
    <div class="col-sm-6 carousel slide" id="demo" data-ride="carousel">
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
    </div> --}}
<div class="container">
    {{-- <h2 class="mt-4 mb-3">登入會員</h2> --}}
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">首頁</a>
        </li>
        <li class="breadcrumb-item active">登入會員</li>
    </ol>
    {{-- <form id="user_login" method="POST" action="/index.blade.php" class="form-signin needs-validation" novalidate> --}}
    {{-- <div id="user_login" class="form-signin was-validated"> --}}
    <div id="user_login" class="form-signin">
        @csrf
        <div class="text-center mb-1">
            <img class="mb-4" src="img/fronted/gambler.png" alt="" width="72" height="72">
        </div>
        <div class="form-group">
            {{-- <input type="account" id="loginAccount" class="form-control" placeholder="帳號" pattern="^\w{6,12}$" required autofocus> --}}
            <input type="account" id="loginAccount" class="form-control" placeholder="帳號" required autofocus>
            {{-- <label for="account">帳號</label> --}}
            <span class='error2'></span>
            {{-- <div class="valid-feedback">符合規則</div>
            <div class="invalid-feedback">請輸入6-12位英文或數字的帳號</div> --}}
        </div>
        <div class="form-group">
            <input type="password" id="loginPassword" class="form-control" placeholder="密碼" required>
            {{-- <label for="password">密碼</label> --}}
            <span class='error4'></span>
            {{-- <div class="valid-feedback">符合規則</div>
            <div class="invalid-feedback">請輸入6-12位英文或數字的密碼</div> --}}
        </div>
        {{-- <div class="checkbox mb-0">
          <label>
            <input type="checkbox" value="remember-me">記住我
          </label>
        </div> --}}
        <button class="btn btn-info btn-primary btn-block" id="login" type="submit">登入</button>
        <hr>
        <div class="row">
            <button type="button" class="col-sm-6 btn btn-light"><a href="register">註冊帳號</a></button>
            <button type="button" class="col-sm-6 btn btn-light"><a href="/">回首頁</a></button>
        </div>
        <div id="login_success" style="display:none;"></div>
    </div>
</div>

@endsection
