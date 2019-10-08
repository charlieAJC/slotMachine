@extends('fronted.layouts.master')

@section('title', 'register')

@section('content')

<div class="container">
    <h2 class="mt-4 mb-3">註冊帳號</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">首頁</a>
        </li>
        <li class="breadcrumb-item active">註冊帳號</li>
    </ol>

    <div id="form-signin">
        <form id="user_register" method="POST">
            @csrf
            <img class="mb-4" src="img/fronted/gambler.png" alt="" width="80" height="80" style="align:left">
            {{-- <h1 class="h3 mb-3 font-weight-normal">註冊帳號</h1> --}}
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
            <hr>
            <div id="register_success" style="display:none;"></div>
        </form>
        <div id="errormsg" style="color: red"></div>
    </div>
</div>

@endsection