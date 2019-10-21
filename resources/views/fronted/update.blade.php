<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="description" content="">
    <meta name="author" content=""> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/top.css" rel="stylesheet">
    <link href="css/fronted/login.css" rel="stylesheet">
    
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/fronted/update.js"></script>
    <script src="js/fronted/top.js"></script>
    <script src="js/fronted/index.js"></script>
    <script src="js/fronted/logout.js"></script>


</head>

<body>
    @include('fronted.layouts.navbar')

    <div class="container">
            <ol class="breadcrumb" style="font-weight: bold;font-size:14pt;">
                    <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">更改個人資料</li>
        </ol>
        <div id="user_login" class="form-signin">
                @csrf
                <div class="text-center mb-1">
                    <img class="mb-4" src="img/fronted/member.png" alt="" width="72" height="72">
                </div>
                <div class="form-group">
                    <input type="text" id="phone" class="form-control" placeholder="電話" required autofocus>
                </div>
                <div class="form-group">
                    <input type="text" id="address" class="form-control" placeholder="地址" required>
                </div>
                <button class="btn btn-info btn-primary btn-block" id="send" type="submit">送出</button>
            </div>

    </div>
    <br><br>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    @include('fronted.layouts.footer')    

</body>

</html>