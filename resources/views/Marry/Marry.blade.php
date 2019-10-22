<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Crazy Marry</title>
    <script src="js/Marry/jquery-3.4.1.js"></script>
    <script src="js/Marry/vue.js"></script>
    <script src="js/Marry/Marry.js"></script>
    <link rel="stylesheet" href="css/Marry/bootstrap.css">
    <script src="js/Marry/bootstrap.js"></script>
    <script src="js/Marry/popper.js"></script>
    <link rel="stylesheet" href="css/Marry/Marry.css">
    {{-- navbar --}}
    <script src="js/fronted/index.js"></script>
    <script src="js/fronted/logout.js"></script>
    {{-- navbar --}}
</head>
<body style="background-image: url('img/Marry/1120.jpg');width:100%;height:100%">
    {{-- navbar --}}
    @include('fronted.layouts.navbar')
    {{-- navbar --}}
    <br>
    <br>
    <br>
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
                <td colspan="6" rowspan="6" id="central">
                    <button onclick="changeMode(100)" class="btn btn-info">100</button>
                    <button onclick="changeMode(200)" class="btn btn-warning">200</button>
                    <button onclick="changeMode(500)" class="btn btn-danger">500</button>
                    <div><h1 id="Gold"></h1></div>
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
        <div id="odds1" style="color:yellow">
            <h3>@{{messege}}</h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(1)" class="btn btn-success">+</button>
                <button onclick="decrese(1)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust1" value="0" readonly="readonly"/></p>
        </div>
        <div id="odds2" style="color:yellow">
            <h3>@{{messege}}</h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                    <button onclick="increse(2)" class="btn btn-success">+</button>
                    <button onclick="decrese(2)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust2" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds3" style="color:yellow">
            <h3>@{{messege}}</h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                    <button onclick="increse(3)" class="btn btn-success">+</button>
                    <button onclick="decrese(3)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust3" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds4" style="color:yellow">
            <h3>@{{messege}}</h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                    <button onclick="increse(4)" class="btn btn-success">+</button>
                    <button onclick="decrese(4)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust4" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds5" style="color:yellow">
            <h3>@{{messege}}</h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                    <button onclick="increse(5)" class="btn btn-success">+</button>
                    <button onclick="decrese(5)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust5" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds6" style="color:yellow">
            <h3>@{{messege}}</h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                    <button onclick="increse(6)" class="btn btn-success">+</button>
                    <button onclick="decrese(6)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust6" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds7" style="color:yellow">
            <h3>@{{messege}}</h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                    <button onclick="increse(7)" class="btn btn-success">+</button>
                    <button onclick="decrese(7)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust7" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds8" style="color:yellow">
            <h3>@{{messege}}</h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                    <button onclick="increse(8)" class="btn btn-success">+</button>
                    <button onclick="decrese(8)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust8" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds9" style="color:yellow">
            <h3>@{{messege}}</h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                    <button onclick="increse(9)" class="btn btn-success">+</button>
                    <button onclick="decrese(9)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust9" value="0" readonly="readonly" /></p>
        </div>
        <p style="margin-bottom:10px">
            <input type="number" id="coin" value="0" readonly="readonly">
            <button onclick="btnInsert()" id="insertButton">insert coins</button>
            <button type="submit" onclick="btnStart()" id="startButton">Start</button>
        </p>
    </div>
    <!-- 投注區域結束 -->
    <footer class="py-1 bg-dark fixed-bottom" style="position:relative">
        <div class="container">
            <div class="m-0 text-center text-white align-middle" style="height:30px;font-size: 1.2rem">Copyright
                &copy;Slot Machine 2019</div>
        </div>
    </footer>
</body>
</html>