@extends('fronted.layouts.master')

@section('title', 'register')

@section('content')
<div id="form-signin">
    <form id="user_register" method="POST">
        @csrf
        <br>
        <img class="mb-4" src="img/gambler.png" alt="" width="80" height="80">
        <h1 class="h3 mb-3 font-weight-normal">註冊帳號</h1>
        <input type="name" id="name" class="form-control" placeholder="姓名" required autofocus><span class='error1'></span><br>
        <input type="account" id="account" class="form-control" placeholder="帳號" required><span class='error2'></span><br>
        {{-- <label for="email" class="sr-only">電子郵件地址</label><input type="text" id="inputEmail" class="form-control" placeholder="電子郵件地址" required><span class='error3'></span><br> --}}
        <input type="password" id="password" class="form-control" placeholder="密碼" required><span class='error4'></span><br>
        {{-- <label><input type="checkbox" value="remember-me">記住我</label> --}}
        <button type="button" id="register" class="btn btn-info btn-primary btn-block">送出</button><br>
        
        <button type="button" id="index" class="btn btn-light"><a href="/">回首頁</a></button>
        <div id="register_success" style="display:none;"></div>
    </form>
    <div id="errormsg" style="color: red"></div>

</div>

<div class="container">
    <h2>註冊帳號</h2>
    <form action="/action_page.php" class="needs-validation" novalidate>
      <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="姓名" name="name" required>
        <div class="valid-feedback">符合條件</div>
        <div class="invalid-feedback">請輸入您的姓名</div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="account" placeholder="帳號" name="account" required>
        <div class="valid-feedback">符合條件</div>
        <div class="invalid-feedback">請輸入6-12位英文或數字的帳號</div>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="pwd" placeholder="密碼" name="pswd" required>
        <div class="valid-feedback">符合條件</div>
        <div class="invalid-feedback">請輸入6-12位英文或數字的密碼</div>
      </div>
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember" required>確認上述資訊
          <div class="valid-feedback">符合條件</div>
          <div class="invalid-feedback">勾選以繼續</div>
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection