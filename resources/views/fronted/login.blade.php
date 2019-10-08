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
    <h2 class="mt-4 mb-3">登入會員</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">首頁</a>
        </li>
        <li class="breadcrumb-item active">登入會員</li>
    </ol>
    <div id="form-signin">
        <form id="user_login" method="POST">
            @csrf
            <img class="mb-4" src="img/fronted/gambler.png" alt="" width="80" height="80">
            {{-- <h1 class="h3 mb-3 font-weight-normal">登入</h1> --}}
            <label for="account" class="sr-only">帳號</label><input type="account" id="account" class="form-control"
                placeholder="帳號" required><span class='error2'></span><br>
            <label for="password" class="sr-only">密碼</label><input type="password" id="password" class="form-control"
                placeholder="密碼" required><span class='error4'></span><br>
            <button type="button" id="login" class="btn btn-info btn-primary btn-block">登入</button><br>
            <button type="button" class="btn btn-light"><a href="register">註冊帳號</a></button>
            <button type="button" class="btn btn-light"><a href="/">回首頁</a></button>
            <hr>
            <div id="login_success" style="display:none;"></div>
        </form>
        <div id="errormsg" style="color: red"></div>
    </div>
</div>
@endsection