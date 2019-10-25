<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>
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

    <script src="js/fronted/login.js"></script>

</head>

<body>
    @include('fronted.layouts.navbar')

    <div class="container">
            {{-- <h2 class="mt-4 mb-3">登入會員</h2> --}}
            <ol class="breadcrumb" style="font-weight: bold;font-size:14pt;">
                    <li class="breadcrumb-item">
                    <a href="/">首頁</a>
                </li>
                <li class="breadcrumb-item active">登入會員</li>
            </ol>
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
                    <img src="img/fronted/img_1.jpg" width="50%" height="50%">
                </div>
                <div class="carousel-item">
                        <img src="img/fronted/img_2.jpg" width="50%" height="50%">
                    </div>
                <div class="carousel-item">
                        <img src="img/fronted/img_1.jpg" width="50%" height="50%">
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
    
        {{-- <form id="user_login" method="POST" action="/index.blade.php" class="form-signin needs-validation" novalidate> --}}
        {{-- <div id="user_login" class="form-signin was-validated"> --}}
        <div id="user_login" class="form-signin">
            @csrf
            <div class="text-center mb-1">
                <img class="mb-4" src="img/fronted/member.png" alt="" width="85" height="85">
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
            <button class="btn btn-info btn-primary btn-block" id="login" type="submit" >登入</button>
            <hr>
            <div class="row">
                <button type="button" class="col-sm-6 btn btn-light"><a href="register">註冊帳號</a></button>
                <button type="button" class="col-sm-6 btn btn-light"><a href="/">回首頁</a></button>
            </div>
            <div id="login_success" style="display:none;"></div>
            
        <br>
    </div>
        
    </div>

    {{-- </div> --}}

    @include('fronted.layouts.footer')


</body>

</html>
