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

    <form id="user_register" class="form-signin" method="POST">
        @csrf
        <div class="text-center mb-1">
            <img class="mb-4" src="img/fronted/gambler.png" alt="" width="72" height="72">
        </div>
        <div class="form-label-group">
            <input type="name" id="name" class="form-control" placeholder="姓名" required autofocus>
            <label for="name">姓名</label>
            <span class='error1'></span>
        </div>
        <div class="form-label-group">
            <input type="account" id="account" class="form-control" placeholder="帳號" required>
            <label for="account">帳號</label>
            <span class='error2'></span>
        </div>
        <div class="form-label-group">
            <input type="password" id="password" class="form-control" placeholder="密碼" required>
            <label for="password">密碼</label>
            <span class='error4'></span>
        </div>
        {{-- <label for="email" class="sr-only">電子郵件地址</label><input type="text" id="inputEmail" class="form-control" placeholder="電子郵件地址" required><span class='error3'></span><br> --}}
        <button class="btn btn-info btn-primary btn-block" id="register" type="button">註冊</button>
        <hr>
        <div class="row">
            <button type="button" class="col-sm-6 btn btn-light"><a href="login">登入帳號</a></button>
            <button type="button" class="col-sm-6 btn btn-light"><a href="/">回首頁</a></button>
        </div>
        <div id="register_success" style="display:none;"></div>
    </form>
</div>

@endsection