<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Crazy Marry</title>
    <script src="js/Marry/jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/Marry/vue.js"></script>
    <script src="js/Marry/Marry.js"></script>
    <!--bootstrap 4.3-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/Marry/Marry.css">
</head>
<body style="background-color: rgb(120, 151, 236)">
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="position:relative">
        <div class="container">
            <a class="navbar-brand" href="/" style="font-size:1.5rem">Slot Machine</a>
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
    <!-- 轉盤區域 -->
    <div id="runningArea">
        <table>
            <tr>
                <td id="1"></td>
                <td id="2"></td>
                <td id="3"></td>
                <td id="4"></td>
                <td id="5"></td>
                <td id="6"></td>
                <td id="7"></td>
                <td id="8"></td>
            </tr>
            <tr>
                <td id="28"></td>
                <td colspan="6" rowspan="6" id="oddsBoard">
                </td>
                <td id="9"></td>
            </tr>
            <tr>
                <td id="27"></td>
                <td id="10"></td>
            </tr>
            <tr>
                <td id="26"></td>
                <td id="11"></td>
            </tr>
            <tr>
                <td id="25"></td>
                <td id="12"></td>
            </tr>
            <tr>
                <td id="24"></td>
                <td id="13"></td>
            </tr>
            <tr>
                <td id="23"></td>
                <td id="14"></td>
            </tr>
            <tr>
                <td id="22"></td>
                <td id="21"></td>
                <td id="20"></td>
                <td id="19"></td>
                <td id="18"></td>
                <td id="17"></td>
                <td id="16"></td>
                <td id="15"></td>
            </tr>
        </table>
    </div>
    <!-- 轉盤區域結束 -->
    <!-- 投注區域 -->
    <div id="setBoard" class="text-center">
        <div id="odds1">
            @{{messege}}
            <img v-bind:src='pic'>
            <p><button onclick="increse(1)">+</button><button onclick="decrese(1)">-</button></p>
            <p><input type="number" id="coinAdjust1" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds2">
            @{{messege}}
            <img v-bind:src='pic'>
            <p><button onclick="increse(2)">+</button><button onclick="decrese(2)">-</button></p>
            <p><input type="number" id="coinAdjust2" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds3">
            @{{messege}}
            <img v-bind:src='pic'>
            <p><button onclick="increse(3)">+</button><button onclick="decrese(3)">-</button></p>
            <p><input type="number" id="coinAdjust3" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds4">
            @{{messege}}
            <img v-bind:src='pic'>
            <p><button onclick="increse(4)">+</button><button onclick="decrese(4)">-</button></p>
            <p><input type="number" id="coinAdjust4" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds5">
            @{{messege}}
            <img v-bind:src='pic'>
            <p><button onclick="increse(5)">+</button><button onclick="decrese(5)">-</button></p>
            <p><input type="number" id="coinAdjust5" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds6">
            @{{messege}}
            <img v-bind:src='pic'>
            <p><button onclick="increse(6)">+</button><button onclick="decrese(6)">-</button></p>
            <p><input type="number" id="coinAdjust6" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds7">
            @{{messege}}
            <img v-bind:src='pic'>
            <p><button onclick="increse(7)">+</button><button onclick="decrese(7)">-</button></p>
            <p><input type="number" id="coinAdjust7" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds8">
            @{{messege}}
            <img v-bind:src='pic'>
            <p><button onclick="increse(8)">+</button><button onclick="decrese(8)">-</button></p>
            <p><input type="number" id="coinAdjust8" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds9">
            @{{messege}}
            <img v-bind:src='pic'>
            <p><button onclick="increse(9)">+</button><button onclick="decrese(9)">-</button></p>
            <p><input type="number" id="coinAdjust9" value="0" readonly="readonly" /></p>
        </div>
        <p style="margin: 5px">
            <input type="number" id="coin" value="0" readonly="readonly">
            <button onclick="btnInsert()">insert coins</button>
            {{-- <button onclick="ChangeMode()">Change Mode</button> --}}
            <button type="submit" onclick="btnStart()" id="startButton">Start</button>
            <button type="submit" onclick="btnFinish()" id="finishButton">Finish</button>
        </p>
    </div>
    <!-- 投注區域結束 -->
    <footer class="py-1 bg-dark fixed-bottom">
        <div class="container">
            <div class="m-0 text-center text-white align-middle" style="height:40px;font-size: 1.5rem">Copyright
                &copy;Slot Machine 2019</div>
        </div>
    </footer>
</body>
</html>