<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News</title>

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
        {{-- <h2 class="mt-4 mb-3">最新消息</h2> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">最新消息</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#">
                            <img class="img-fluid rounded d-block w-100" src="img/fronted/c1.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="card-title font-weight-bolder">客服中心電話維護說明公告</h3>
                        <p class="card-text">親愛的玩家您好：<br>
                            為配合電信業者進行線路優化作業，屆時電話系統將暫停服務，造成不便敬請多加見諒。<br>
                            影響時間：2019/10/12（六）11:00~12:00<br>
                            遊戲伺服器正常運作不受影響，期間如有任何問題歡迎多加利用問題通報或客服信箱。</p>
                        <a href="#" class="btn btn-primary">點我看更多 &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                發佈日期：2019/10/08 上午 10:00:00
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#">
                            <img class="img-fluid rounded" src="img/fronted/c2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="card-title font-weight-bolder">嚴正聲明：<br>本公司從未對外徵求銀行存簿、金融卡，切勿受騙上當！</h3>
                        <p class="card-text">親愛的玩家您好：<br>
                            近期接獲玩家反應，有不肖之徒冒用本團隊名義，以調整財務為由蒐購銀行存摺、提款卡，企圖欺瞞大眾提供銀行帳戶，作為人頭帳戶使用。<br>
                            對於此類不法行徑本公司已主動調查瞭解，並採取相關法律行動，也再次呼籲各位切勿提供重要財務資料予他人，以免淪為犯罪共犯！</p>
                        <a href="#" class="btn btn-primary">點我看更多 &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                發佈日期：2019/10/07 下午 14:00:00
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#">
                            <img class="img-fluid rounded d-block w-100" src="img/fronted/c3.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="card-title font-weight-bolder">網頁HD版優化說明公告</h3>
                        <p class="card-text">各位親愛的玩家您好：<br>
                            因進行網頁及遊戲優化作業，故網頁HD版將會於2019/10/08（二）更換登入介面。<br>
                            新的網頁HD版遊戲館僅開放【拉霸機】、【小瑪莉】共二款遊戲館。<br>
                            其餘遊戲館則陸續增加，若遇未開放遊戲館還請玩家透過PC版或手機裝置進行遊戲及新活動，造成不便，敬請見諒！謝謝。</p>
                        <a href="#" class="btn btn-primary">點我看更多 &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                發佈日期：2019/10/06 上午 11:00:00
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