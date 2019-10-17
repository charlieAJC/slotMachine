<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="description" content="">
    <meta name="author" content=""> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Game</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/top.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/fronted/top.js"></script>
    <script src="js/fronted/index.js"></script>
    <script src="js/fronted/logout.js"></script>

</head>

<body>
    @include('fronted.layouts.navbar')

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
                    <a href="slot"><img class="card-img-top d-block w-100" src="img/fronted/game_1.jpg" alt="Avatar"></a>
                    {{-- <div class="middle">
                        <div class="centered">Centered</div>
                    </div> --}}
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

    @include('fronted.layouts.footer')    
    
</body>

</html>