@extends('fronted.layouts.master')

@section('title', 'register')

@section('content')
<<<<<<< HEAD
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
            <img class="mb-4" src="img/gambler.png" alt="" width="80" height="80" style="align:left">
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
=======
<div id="form-signin">
    {{-- <form id="user_register" method="POST"> --}}
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
    {{-- </form> --}}
    <div id="errormsg" style="color: red"></div>

</div>

{{-- <div class="container">
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
  </div> --}}
@endsection
>>>>>>> 5a799645043d43fb55a078e77f5f157c535672a7
