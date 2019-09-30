@extends('fronted.layouts.master')

@section('title', 'register')

@section('content')
<div id="form-signin">
    <form id="user_register" method="POST">
        @csrf
        <img class="mb-4" src="img/gambler.png" alt="" width="80" height="80">
        <h1 class="h3 mb-3 font-weight-normal">註冊帳號</h1>
        <label for="name" class="sr-only">姓名</label><input type="name" id="name" class="form-control" placeholder="姓名" required autofocus><span class='error1'></span><br>
        <label for="account" class="sr-only">帳號</label><input type="account" id="account" class="form-control" placeholder="帳號" required><span class='error2'></span><br>
        {{-- <label for="email" class="sr-only">電子郵件地址</label><input type="text" id="inputEmail" class="form-control" placeholder="電子郵件地址" required><span class='error3'></span><br> --}}
        <label for="password" class="sr-only">密碼</label><input type="password" id="password" class="form-control" placeholder="密碼" required><span class='error4'></span><br>
        {{-- <label><input type="checkbox" value="remember-me">記住我</label> --}}
        <button type="button" id="register" class="btn btn-info btn-primary btn-block">送出</button><br>
        
        <button type="button" id="index" class="btn btn-light">回首頁</button>
        <div id="register_success" style="display:none;"></div>
    </form>
    <div id="errormsg" style="color: red"></div>

</div>
@endsection
