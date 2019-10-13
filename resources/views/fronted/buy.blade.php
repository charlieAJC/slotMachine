<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Buy</title>

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
        {{-- <h2 class="mt-4 mb-3">購點儲值</h2> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">購點儲值</li>
        </ol>
        {{-- ------------景翔CSS很智障的儲值表格------------ --}}
        <div>
            <p>儲值方法</p>
        </div>

        <div>
            <img src="img\fronted\buy\jkopc.png" style="background-color:grey;" id="jkBuy">
            <img src="img\fronted\buy\shineidianhua_pc_tw.png" style="background-color:grey;" id="chtBuy">
        </div>

        {{-- 用js更改敘述內容 --}}
        <div>
            <p id="buyDesc">使用街口支付App掃描網頁內付款QRCode碼，並以「街口帳戶」餘額付款或連結「銀行帳戶」付款</p>
        </div>

        <div style="width: 415px; flex: 0 1 auto;">
            <table id="buyPlan">
                <tr>
                    <th></th>
                    <th>價格</th>
                    <th>點數</th>
                </tr>
                <tr>
                    <td>NT$ 100</td>
                    <td>貝殼幣 × 140</td>
                </tr>
                <tr>
                    <td>NT$ 250</td>
                    <td>貝殼幣 × 350</td>
                </tr>
                <tr>
                    <td>NT$ 500</td>
                    <td>貝殼幣 × 700</td>
                </tr>
                <tr>
                    <td>NT$ 1000</td>
                    <td>貝殼幣 × 1400</td>
                </tr>
                <tr>
                    <td>NT$ 2500</td>
                    <td>貝殼幣 × 3500</td>
                </tr>
            </table>
        </div>

        {{-- <div style="width: 415px; flex: 0 1 auto;">
                    <table>
                        <tr>
                            <th>價格</th>
                            <th>點數</th>
                        </tr>
                        <tr>
                            <td>NT$ 100</td>
                            <td>貝殼幣 × 140</td>
                        </tr>
                        <tr>
                            <td>NT$ 250</td>
                            <td>貝殼幣 × 350</td>
                        </tr>
                        <tr>
                            <td>NT$ 500</td>
                            <td>貝殼幣 × 700</td>
                        </tr>
                        <tr>
                            <td>NT$ 1000</td>
                            <td>貝殼幣 × 1400</td>
                        </tr>
                    </table>
                </div> --}}

        <div>
            <table>
                <tr>
                    <th>確認購買內容</th>
                </tr>
                <tr>
                    <td>商品</td>
                    <td>貝殼幣 × 140</td>
                </tr>
                <tr>
                    <td>價格</td>
                    <td>NT$ 100</td>
                </tr>
                <tr>
                    <td>付費方式</td>
                    <td>街口支付</td>
                </tr>
            </table>
            <input type="checkbox" id="agree">
            <label for="agree">
                我同意會員系統服務合約、個人資料隱私權保護政策未滿20歲之消費者，
                應由法定代理人閱讀並同意上述合約後，方得使用本儲值服務。
            </label>
            <br>
            <button>同意</button>
        </div>
        {{-- ------------景翔CSS很智障的儲值表格------------ --}}




        {{-- <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h3 class="card-header">Basic</h3>
                            <div class="card-body">
                                <div class="display-4">$19.99</div>
                                <div class="font-italic">per month</div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-primary">Sign Up!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card card-outline-primary h-100">
                            <h3 class="card-header bg-primary text-white">Plus</h3>
                            <div class="card-body">
                                <div class="display-4">$39.99</div>
                                <div class="font-italic">per month</div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-primary">Sign Up!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h3 class="card-header">Ultra</h3>
                            <div class="card-body">
                                <div class="display-4">$159.99</div>
                                <div class="font-italic">per month</div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-primary">Sign Up!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

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

    <script src="js/fronted/buy.js"></script>
    <script src="js/fronted/top.js"></script>

</body>

</html>