<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/login.css" rel="stylesheet">

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

    {{-- <div class="row">
    <div class="col-sm-6 carousel slide" id="demo" data-ride="carousel">
=======
@section('content')
    
<div class="row">
    <div class="col-sm-7 carousel slide" id="demo" data-ride="carousel">
>>>>>>> 5b3809691505d144183cffdf237e893e2c1c3024
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
        {{-- <h2 class="mt-4 mb-3">登入會員</h2> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">登入會員</li>
        </ol>
        {{-- <form id="user_login" method="POST" action="/index.blade.php" class="form-signin needs-validation" novalidate> --}}
        {{-- <div id="user_login" class="form-signin was-validated"> --}}
        <div id="user_login" class="form-signin">
            @csrf
<<<<<<< HEAD
            <div class="text-center mb-1">
                <img class="mb-4" src="img/fronted/gambler.png" alt="" width="72" height="72">
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
            <button class="btn btn-info btn-primary btn-block" id="login" type="submit">登入</button>
            <hr>
            <div class="row">
                <button type="button" class="col-sm-6 btn btn-light"><a href="register">註冊帳號</a></button>
                <button type="button" class="col-sm-6 btn btn-light"><a href="/">回首頁</a></button>
            </div>
            <div id="login_success" style="display:none;"></div>
        </div>
    </div>

    <footer class="py-1 bg-dark fixed-bottom">
        <div class="container" >
            <p class="m-0 text-center text-white">Copyright &copy; Slot Machine 2019</p><br>
            {{-- <p class="m-0 text-center"><a href="#" class="text-white">Back to top</a></p> --}}
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/fronted/login.js"></script>
</body>

</html>
=======
            <img class="mb-4" src="img/fronted/gambler.png" alt="" width="80" height="80">
            <h1 class="h3 mb-3 font-weight-normal">登入</h1>
            <label for="account" class="sr-only">帳號</label><input type="account" id="account" class="form-control"
                placeholder="帳號" required><span class='error2'></span><br>
            <label for="password" class="sr-only">密碼</label><input type="password" id="password" class="form-control"
                placeholder="密碼" required><span class='error4'></span><br>
            <button type="button" id="login" class="btn btn-info btn-primary btn-block">登入</button><br>
            <button type="button" class="btn btn-light"><a href="register">註冊帳號</a></button>
            <button type="button" class="btn btn-light"><a href="/">回首頁</a></button>
            <div id="login_success" style="display:none;"></div>
        </form>
        <div id="errormsg" style="color: red"></div>
    </div>
</div>
@endsection
>>>>>>> 5b3809691505d144183cffdf237e893e2c1c3024
