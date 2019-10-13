<<<<<<< HEAD
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Index</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/index.css" rel="stylesheet">
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

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('img/fronted/carousel_1.jpg')"></div>
                <div class="carousel-item" style="background-image: url('img/fronted/carousel_2.jpg')"></div>
                <div class="carousel-item" style="background-image: url('img/fronted/carousel_3.jpg')"></div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <div class="container">
        <h2 class="mt-4 mb-3">最新消息</h2>
        <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <span class="badge badge-secondary">New</span>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">【2019/10/08】客服中心電話維護說明公告</a>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-body">
                        親愛的玩家您好：<br>
                        為配合電信業者進行線路優化作業，屆時電話系統將暫停服務，造成不便敬請多加見諒。<br>
                        影響時間：2019/10/12（六）11:00~12:00<br>
                        遊戲伺服器正常運作不受影響，期間如有任何問題歡迎多加利用問題通報或客服信箱。
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">【2019/10/07】嚴正聲明：本公司從未對外徵求銀行存簿、金融卡，切勿受騙上當！
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-body">
                        親愛的玩家您好：<br>
                        近期接獲玩家反應，有不肖之徒冒用本團隊名義，以調整財務為由蒐購銀行存摺、提款卡，企圖欺瞞大眾提供銀行帳戶，作為人頭帳戶使用。<br>
                        對於此類不法行徑本公司已主動調查瞭解，並採取相關法律行動，也再次呼籲各位切勿提供重要財務資料予他人，以免淪為犯罪共犯！<br>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">【2019/10/06】網頁HD版優化說明公告</a>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-body">
                        各位親愛的玩家您好：<br>
                        因進行網頁及遊戲優化作業，故網頁HD版將會於2019/10/08（二）更換登入介面。<br>
                        新的網頁HD版遊戲館僅開放【拉霸機】、【小瑪莉】共二款遊戲館。<br>
                        其餘遊戲館則陸續增加，若遇未開放遊戲館還請玩家透過PC版或手機裝置進行遊戲及新活動，造成不便，敬請見諒！謝謝。<br>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-4 mb-3">遊戲介紹</h2>
        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="slot"><img class="card-img-top d-block w-100" src="img/fronted/game_1.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="slot">拉霸機</a>
                        </h4>
                        <p class="card-text">Slot</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
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
            <div class="col-lg-4 col-sm-6 portfolio-item">
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
            <div class="col-lg-4 col-sm-6 portfolio-item">
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
            <div class="col-lg-4 col-sm-6 portfolio-item">
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
            <div class="col-lg-4 col-sm-6 portfolio-item">
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

    <script src="js/fronted/index.js"></script>
    <script src="js/fronted/logout.js"></script>
    <script src="js/fronted/top.js"></script>
</body>

</html>
=======
@extends('fronted.layouts.master')

@section('title', 'index')

@section('content')

<main role="main">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/fronted/c3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/900x500" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/600x1200" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="album py-5 bg-light">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <img src="img/fronted/game.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <button class="button" href="Marry" style="vertical-align:middle"><span>Start Game </span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <img src="img/fronted/game2.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        {{-- <div class="text">
                            <h1 style="font-size:40px">拉霸機</h1>
                            <p>And I'm a Photographer</p>
                            </div> --}}
                        <button class="button" href="slot" style="vertical-align:middle"><span>Start Game </span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div>

</main>
@endsection
>>>>>>> 5b3809691505d144183cffdf237e893e2c1c3024
