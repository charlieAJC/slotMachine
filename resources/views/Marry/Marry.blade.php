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
    <style>
        td {
            border: 2px solid black;
            width: 50px;
            height: 50px;
        }

        .table {
            background-color: rgb(120, 151, 236);
        }

        .setBoard {
            background-color: rgb(240, 134, 204);
        }

        li {
            border: 2px solid black;
            width: 54px;
            height: 125px;
            display: inline-block;
            background-color: aquamarine;
            margin: 5px;
        }

        p>input {
            width: 100px;
            padding: 0px;
            margin: 0px;
        }

        .yellowLight {
            background-color: yellow;
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }

        .normal {
            background-color: rgb(120, 151, 236);
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }

        .pineapple{
            background-image: url("img/Marry/pineapple.png");
        }
        .watermelon{
            background-image: url("img/Marry/watermelon.png");
        }
        .grape{
            background-image: url("img/Marry/grape.png");
        }
        .strawberry{
            background-image: url("img/Marry/strawberry.png");
        }
        .orange{
            background-image: url("img/Marry/orange.png");
        }
        .cherry{
            background-image: url("img/Marry/cherry.png");
        }
        .tomato{
            background-image: url("img/Marry/tomato.png");
        }
        .cranberry{
            background-image: url("img/Marry/cranberry.png");
        }
        .carrot{
            background-image: url("img/Marry/carrot.png");
        }

    </style>
    <!--bootstrap 4.3-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
</head>
<body style="background-color: rgb(240, 134, 204)">
    <!-- 轉盤區域 -->
    <div class="table" style="margin: 0px" id="runingArea">
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
                <td colspan="6" rowspan="6">
                    X3.0
                    X1.5
                    X1.2<br>
                    X1.0
                    X0.8
                    X0.7
                    X0.6<br>
                    X0.5
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
    <div class="setBoard" style="margin: 5px">
        <li><img src="img/Marry/pineapple.png">
            <p><button onclick="increse(1)">+</button><button onclick="decrese(1)">-</button></p>
            <p><input type="number" id="coinAdjust1" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="img/Marry/watermelon.png">
            <p><button onclick="increse(2)">+</button><button onclick="decrese(2)">-</button></p>
            <p><input type="number" id="coinAdjust2" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="img/Marry/grape.png">
            <p><button onclick="increse(3)">+</button><button onclick="decrese(3)">-</button></p>
            <p><input type="number" id="coinAdjust3" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="img/Marry/strawberry.png">
            <p><button onclick="increse(4)">+</button><button onclick="decrese(4)">-</button></p>
            <p><input type="number" id="coinAdjust4" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="img/Marry/orange.png">
            <p><button onclick="increse(5)">+</button><button onclick="decrese(5)">-</button></p>
            <p><input type="number" id="coinAdjust5" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="img/Marry/cherry.png">
            <p><button onclick="increse(6)">+</button><button onclick="decrese(6)">-</button></p>
            <p><input type="number" id="coinAdjust6" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="img/Marry/tomato.png">
            <p><button onclick="increse(7)">+</button><button onclick="decrese(7)">-</button></p>
            <p><input type="number" id="coinAdjust7" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="img/Marry/cranberry.png">
            <p><button onclick="increse(8)">+</button><button onclick="decrese(8)">-</button></p>
            <p><input type="number" id="coinAdjust8" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="img/Marry/carrot.png">
            <p><button onclick="increse(9)">+</button><button onclick="decrese(9)">-</button></p>
            <p><input type="number" id="coinAdjust9" value="0" readonly="readonly" /></p>
        </li>
        <p style="margin: 5px">
            <input type="number" id="coin" value="0" readonly="readonly">
            <button onclick="btnInsert()">insert coins</button>
            <button onclick="ChangeMode()">Change Mode</button>
        </p>
        <p style="margin: 5px">
            <button type="submit" onclick="btnStart()" id="startButton">Start</button>
            <button type="submit" onclick="btnFinish()" id="finishButton">Finish</button>
        </p>
    </div>
    <!-- 投注區域結束 -->
</body>
</html>
