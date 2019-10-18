<!DOCTYPE html>
<html lang="zh-TW">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="description" content="">
    <meta name="author" content=""> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Manager</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/top.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    {{-- <script src="js/fronted/top.js"></script> --}}

    <script src="js/fronted/manager.js"></script>
    <script src="js/fronted/index.js"></script>
    <script src="js/fronted/logout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
</head>

<body>
    @include('fronted.layouts.navbar')

    <div class="container">
        <h2 class="mt-4 mb-3">Manager</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">Manager</li>
        </ol>
    </div>


    <!--圖表測試-->
    <div class="container">
                <!-- 統計圖畫在這裡 -->
                <div class="row">
                    <div class=col-sm-6>
                        <canvas id="playTimesCanvas"></canvas>
                    </div>
                    <div class=col-sm-6>
                        <canvas id="profitCanvas"></canvas>
                    </div>
                </div>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    @include('fronted.layouts.footer')  

</body>

</html>
