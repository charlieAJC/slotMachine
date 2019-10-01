<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>game1</title>
    <script src="Marry.js"></script>
    <script src="jquery-3.4.1.js"></script>
    <style>
        td {
            border: 2px solid black;
            width: 50px;
            height: 50px;
        }

        .table {
            background-color: rgb(120, 151, 236);
        }

        .set {
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
    </style>
    <!--bootstrap 4.3-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: rgb(240, 134, 204)">
    <!-- 轉盤區域 -->
    <div class="table" style="margin: 0px">
        <table>
            <tr>
                <td id="1"><img src="../../../public/img/Marry/pic1.png"></td>
                <td id="2"><img src="../../../public/img/Marry/pic2.png"></td>
                <td id="3"><img src="../../../public/img/Marry/pic2.png"></td>
                <td id="4"><img src="../../../public/img/Marry/pic3.png"></td>
                <td id="5"><img src="../../../public/img/Marry/pic3.png"></td>
                <td id="6"><img src="../../../public/img/Marry/pic3.png"></td>
                <td id="7"><img src="../../../public/img/Marry/pic4.png"></td>
                <td id="8"><img src="../../../public/img/Marry/pic4.png"></td>
            </tr>
            <tr>
                <td id="28"><img src="../../../public/img/Marry/pic9.png"></td>
                <td colspan="6" rowspan="6">
                    <img src="../../../public/img/Marry/pic1.png">X5.0
                    <img src="../../../public/img/Marry/pic2.png">X3.0
                    <img src="../../../public/img/Marry/pic3.png">X1.5
                    <img src="../../../public/img/Marry/pic4.png">X1.2<br>
                    <img src="../../../public/img/Marry/pic5.png">X1.0
                    <img src="../../../public/img/Marry/pic6.png">X0.8
                    <img src="../../../public/img/Marry/pic7.png">X0.7
                    <img src="../../../public/img/Marry/pic8.png">X0.6<br>
                    <img src="../../../public/img/Marry/pic9.png">X0.5
                </td>
                <td id="9"><img src="../../../public/img/Marry/pic4.png"></td>
            </tr>
            <tr>
                <td id="27"><img src="../../../public/img/Marry/pic9.png"></td>
                <td id="10"><img src="../../../public/img/Marry/pic5.png"></td>
            </tr>
            <tr>
                <td id="26"><img src="../../../public/img/Marry/pic9.png"></td>
                <td id="11"><img src="../../../public/img/Marry/pic5.png"></td>
            </tr>
            <tr>
                <td id="25"><img src="../../../public/img/Marry/pic9.png"></td>
                <td id="12"><img src="../../../public/img/Marry/pic5.png"></td>
            </tr>
            <tr>
                <td id="24"><img src="../../../public/img/Marry/pic8.png"></td>
                <td id="13"><img src="../../../public/img/Marry/pic6.png"></td>
            </tr>
            <tr>
                <td id="23"><img src="../../../public/img/Marry/pic8.png"></td>
                <td id="14"><img src="../../../public/img/Marry/pic6.png"></td>
            </tr>
            <tr>
                <td id="22"><img src="../../../public/img/Marry/pic8.png"></td>
                <td id="21"><img src="../../../public/img/Marry/pic8.png"></td>
                <td id="20"><img src="../../../public/img/Marry/pic7.png"></td>
                <td id="19"><img src="../../../public/img/Marry/pic7.png"></td>
                <td id="18"><img src="../../../public/img/Marry/pic7.png"></td>
                <td id="17"><img src="../../../public/img/Marry/pic7.png"></td>
                <td id="16"><img src="../../../public/img/Marry/pic6.png"></td>
                <td id="15"><img src="../../../public/img/Marry/pic6.png"></td>
            </tr>
        </table>
    </div>
    <!-- 轉盤區域結束 -->
    <!-- 投注區域 -->
    <div class="set" style="margin: 5px">
        <li><img src="../../../public/img/Marry/pic1.png">
            <p><button onclick="increse(1)">+</button><button onclick="decrese(1)">-</button></p>
            <p><input type="number" id="coinAdjust1" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="../../../public/img/Marry/pic2.png">
            <p><button onclick="increse(2)">+</button><button onclick="decrese(2)">-</button></p>
            <p><input type="number" id="coinAdjust2" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="../../../public/img/Marry/pic3.png">
            <p><button onclick="increse(3)">+</button><button onclick="decrese(3)">-</button></p>
            <p><input type="number" id="coinAdjust3" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="../../../public/img/Marry/pic4.png">
            <p><button onclick="increse(4)">+</button><button onclick="decrese(4)">-</button></p>
            <p><input type="number" id="coinAdjust4" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="../../../public/img/Marry/pic5.png">
            <p><button onclick="increse(5)">+</button><button onclick="decrese(5)">-</button></p>
            <p><input type="number" id="coinAdjust5" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="../../../public/img/Marry/pic6.png">
            <p><button onclick="increse(6)">+</button><button onclick="decrese(6)">-</button></p>
            <p><input type="number" id="coinAdjust6" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="../../../public/img/Marry/pic7.png">
            <p><button onclick="increse(7)">+</button><button onclick="decrese(7)">-</button></p>
            <p><input type="number" id="coinAdjust7" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="../../../public/img/Marry/pic8.png">
            <p><button onclick="increse(8)">+</button><button onclick="decrese(8)">-</button></p>
            <p><input type="number" id="coinAdjust8" value="0" readonly="readonly" /></p>
        </li>
        <li><img src="../../../public/img/Marry/pic9.png">
            <p><button onclick="increse(9)">+</button><button onclick="decrese(9)">-</button></p>
            <p><input type="number" id="coinAdjust9" value="0" readonly="readonly" /></p>
        </li>
        <form action="" method="GET"></form>
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