<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="img/fronted/logo.png" />

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/login.css" rel="stylesheet">    

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/fronted/register.js"></script>

</head>

<body>
    @include('fronted.layouts.navbar')


    <div class="container">
        {{-- <h2 class="mt-4 mb-3">註冊帳號</h2> --}}
        <ol class="breadcrumb" style="font-weight: bold;font-size:14pt;">
                <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">註冊帳號</li>
        </ol>

        {{-- <form id="user_register" class="form-signin" method="POST"> --}}
        {{-- <div id="user_register" class="form-signin was-validated"> --}}
        <div id="user_register" class="form-signin">
            @csrf
            <div class="text-center mb-1">
                <img class="mb-4" src="img/fronted/member.png" alt="" width="85" height="85">
            </div>
            <div class="form-group">
                {{-- <input type="name" id="name" class="form-control" placeholder="姓名" pattern="^.+$" required autofocus> --}}
                <input type="name" id="name" class="form-control" placeholder="姓名" required autofocus>
                {{-- <label for="name">姓名</label> --}}
                <span class='error1'></span>
                {{-- <div class="valid-feedback">符合規則</div>
                    <div class="invalid-feedback">請輸入姓名</div> --}}
            </div>
            <div class="form-group">
                {{-- <input type="account" id="account" class="form-control" placeholder="帳號" pattern="^\w{6,12}$" required> --}}
                <input type="account" id="account" class="form-control" placeholder="帳號" required>
                {{-- <label for="account">帳號</label> --}}
                <span class='error2'></span>
                {{-- <div class="valid-feedback">符合規則</div>
                    <div class="invalid-feedback">請輸入6-12位英文或數字的帳號</div> --}}
            </div>
            <div class="form-group">
                {{-- <input type="password" id="password" class="form-control" placeholder="密碼" pattern="^\w{6,12}$" required> --}}
                <input type="password" id="password" class="form-control" placeholder="密碼" required>
                {{-- <label for="password">密碼</label> --}}
                <span class='error4'></span>
                {{-- <div class="valid-feedback">符合規則</div>
                    <div class="invalid-feedback">請輸入6-12位英文或數字的密碼</div> --}}
            </div>
            {{-- <label for="email" class="sr-only">電子郵件地址</label><input type="text" id="inputEmail" class="form-control" placeholder="電子郵件地址" required><span class='error3'></span><br> --}}
            <button class="btn btn-info btn-primary btn-block" id="register" type="button">註冊</button>
            <hr>
            <div class="row">
                <button type="button" class="col-sm-6 btn btn-light"><a href="login">登入帳號</a></button>
                <button type="button" class="col-sm-6 btn btn-light"><a href="/">回首頁</a></button>
            </div>
            <div id="register_success" style="display:none;"></div>
        </div>
    </div>

    @include('fronted.layouts.footer')

</body>

</html>
