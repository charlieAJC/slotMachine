<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Slot</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/slot/style.css" rel="stylesheet">

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
                            @csrf

                            <a class="dropdown-item" href="update">更改個人資料</a>
                            <a class="dropdown-item" href="#" id="navLogout">登出</a>
                        </div>
                    </li>
                    {{-- 登入成功才會顯示的下拉式選單 --}}

                </ul>
            </div>
        </div>
    </nav>
    <div class="header">
        <h2>Header</h2>
    </div>
    <div class="row">
        <div class="column side">
            <table class="none">
                <tr>
                    <td><img alt="" src="../../img/slot/chip5.png" height="120" width="120"></td>
                    <td><img alt="" src="../../img/slot/chip10.png" height="120" width="120"></td>
                </tr>
                <tr>
                    <td><img alt="" src="../../img/slot/chip50.png" height="120" width="120"></td>
                    <td><img alt="" src="../../img/slot/chip100.png" height="120" width="120"></td>
                </tr>
            </table>
        </div>
        <div class="column middle">
            <div class="btn-group">
                <button id="casinoShuffle" class="button btn-light">Shuffle!</button>
                <button id="casinoStop" class="button btn-light">Stop!</button>
            </div>
            <div class="casino">
                <div id="casino1" class="slotMachine">
                    <div id="img1" class="slot slot1"></div>
                </div>
                <div id="casino2" class="slotMachine">
                    <div id="img2" class="slot slot2"></div>
                </div>    
                <div id="casino3" class="slotMachine">
                    <div id="img3" class="slot slot3"></div>
                </div>
            </div>            
        </div>
        <div class="column side"></div>
    </div>

    <footer class="py-1 bg-dark fixed-bottom">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Slot Machine 2019</p><br>
            {{-- <p class="m-0 text-center"><a href="#" class="text-white">Back to top</a></p> --}}
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/slot/slotmachine.js"></script>

</body>

</html>