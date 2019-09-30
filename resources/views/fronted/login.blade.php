@extends('fronted.layouts.master')

@section('title', 'login')

@section('content')
<div class="form-signin">
    <form id="user_login" method="POST">
        @csrf
        <img class="mb-4" src="img/gambler.png" alt="" width="80" height="80">
        <h1 class="h3 mb-3 font-weight-normal">登入</h1>
        <label for="account" class="sr-only">帳號</label><input type="account" id="account" class="form-control" placeholder="帳號" required><span class='error2'></span><br>
        <label for="password" class="sr-only">密碼</label><input type="password" id="password" class="form-control" placeholder="密碼" required><span class='error4'></span><br>
        <button type="button" id="login" class="btn btn-info btn-primary btn-block">登入</button><br>
        
        <button type="button" class="btn btn-light" onclick="location.href='register'">註冊帳號</button>
        <button type="button" class="btn btn-light" onclick="location.href='index'">回首頁</button>
        <div id="login_success" style="display:none;"></div>
    </form>
    <div id="errormsg" style="color: red"></div>
</div>
@endsection