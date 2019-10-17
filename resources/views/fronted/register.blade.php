<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register</title>

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
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Slot Machine</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="game">遊戲介紹</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buy" id="navBuy" style="display:none">購點 / 儲值</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">客服中心</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login" id="navLogin" style="display:none">登入會員</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register" id="navRegister" style="display:none">註冊帳號</a>
                    </li>

                    {{-- 登入成功才會顯示的下拉式選單 --}}
                    <li class="nav-item dropdown" id="navAccount" style="display:none">
                        <a class="nav-link dropdown-toggle" href=".dropdown-menu" id="navbardrop"
                            data-toggle="dropdown">
                            使用者帳號
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="update">更改個人資料</a>
                            <a class="dropdown-item" href="#" id="navLogout">登出</a>
                        </div>
                    </li>
                    {{-- 登入成功才會顯示的下拉式選單 --}}

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        {{-- <h2 class="mt-4 mb-3">註冊帳號</h2> --}}
        <ol class="breadcrumb">
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
                <img class="mb-4" src="img/fronted/member.png" alt="" width="72" height="72">
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
