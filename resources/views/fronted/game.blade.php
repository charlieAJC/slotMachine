<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Game</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/top.css" rel="stylesheet">

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
        {{-- <h2 class="mt-4 mb-3">遊戲介紹</h2> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">遊戲介紹</li>
        </ol>
        <div class="row">
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <a href="slot"><img class="image card-img-top d-block w-100" src="img/fronted/game_1.jpg" alt="Avatar"></a>
                    <div class="middle">
                        <div class="centered">Centered</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="slot">拉霸機</a>
                        </h4>
                        <p class="card-text">Slot</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <a href="LittleMary"><img class="card-img-top d-block w-100" src="img/fronted/game_2.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="LittleMary">小瑪莉</a>
                        </h4>
                        <p class="card-text">Marry</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top d-block w-100" src="img/fronted/game_3.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">賓果彈珠台</a>
                        </h4>
                        <p class="card-text">日式煙花祭典風格，多元化的玩法設計，讓你彷彿置身日本屋台打彈珠台的樂趣。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top d-block w-100" src="img/fronted/game_4.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">逗陣捕魚季</a>
                        </h4>
                        <p class="card-text">捕魚連線倍數贈，幸運輪盤彩金送；砲台鯊魚逗陣來，連爆大獎拿不完。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top d-block w-100" src="img/fronted/game_5.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">瘋狂農場</a>
                        </h4>
                        <p class="card-text">瘋狂動物吃得飽，翻倍彩金不會少！橫衝直撞送百搭、連線多多是最好！吃飽喝足拼轉盤、百倍頭獎樂逍遙！</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top d-block w-100" src="img/fronted/game_6.png" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">百家樂</a>
                        </h4>
                        <p class="card-text">超擬真瞇牌畫面，完整5路單詳細記錄！賠率再加碼！緊張刺激猶如身歷其境！</p>
                    </div>
                </div>
            </div>
        </div>
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item disabled"><a class="page-link" href="#">上一頁</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">下一頁</a></li>
        </ul>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <footer class="py-1 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Slot Machine 2019</p><br>
            {{-- <p class="m-0 text-center"><a href="#" class="text-white">Back to top</a></p> --}}
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/fronted/top.js"></script>

</body>

</html>