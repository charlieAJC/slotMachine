var list = new Array(28);
var odds = new Array(9);
var typeOf = new Array(28);

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//產生格子id list = [1,2,3,....,28]
function addNumber() {
    for (i = 0; i <= 27; i++) {
        list[i] = i + 1;
    }
}
addNumber();

$(document).ready(function () {
    $.ajax({
        async: true, //啟用同步請求
        type: "POST",
        url: "/LittleMary",
        dataType: "json",
        data: {'documentready':'ready'},
        success: function (response) {
            typeOf = response["fruitarry"];
            odds = response["fruitodds"];
            console.log(odds);
            console.log(typeOf);
            for (i = 1; i <= 28; i++) {
                document.getElementById(i).style.backgroundImage = url("img/Marry/pic" + typeOf[i - 1] + ".png");
            }
        },
        error: function () {
            alert("版面載入錯誤");
        }
    })
});

// 增加下注金額
function increse(i) {
    var Id = ("coinAdjust" + i);
    if (coin.value >= increseMoney && isMode == true) {
        document.getElementById(Id).value = parseInt(document.getElementById(Id).value) + increseMoney;
        coin.value = coin.value - increseMoney;
    } else if (coin.value >= increseMoney && isMode == false) {
        document.getElementById(Id).value = parseInt(document.getElementById(Id).value) + increseMoney;
        coin.value = coin.value - increseMoney;
    } else {
        alert("請投幣");
    }
}

// 減少下注金額
function decrese(i) {
    var Id = ("coinAdjust" + i);
    if (document.getElementById(Id).value >= decreseMoney) {
        document.getElementById(Id).value = parseInt(document.getElementById(Id).value) - decreseMoney;
        coin.value = parseInt(coin.value) + decreseMoney;
    }
}

var totallCoin = 0; //盤面總金額
// 預儲遊戲機台,扣玩家儲值金
function btnInsert() {
    coinAdjust();
    totall();
    totallCoin = parseInt(totallInsert) + parseInt(coin.value);
    if (isMode == true) {
        $.ajax({
            async: true, //啟用同步請求
            type: "POST",
            url: "/LittleMary",
            dataType: "json",
            data: {
                'total': totallCoin,
                'need': insertMoney
            },
            success: function (response) {
                coin.value = parseInt(coin.value) + insertMoney;
            },
            error: function () {
                alert("請儲值");
            }
        })
    } else {
        $.ajax({
            async: true, //啟用同步請求
            type: "POST",
            url: "/LittleMary",
            dataType: "json",
            data: {
                'total': totallCoin,
                'need': insertMoney
            },
            success: function (response) {
                coin.value = parseInt(coin.value) + insertMoney;
            },
            error: function () {
                alert("請儲值");
            }
        })
    }
    totallCoin = 0;
}

// 切換 小賭/豪賭 模式
var isMode = true;
var insertMoney = 1000;
var increseMoney = 100;
var decreseMoney = 100;

function ChangeMode() {
    isMode = !isMode;
    insertMoney = isMode ? 1000 : 10000;
    increseMoney = isMode ? 100 : 1000;
    decreseMoney = isMode ? 100 : 1000;
}

// 產生當次投注金額陣列 coinAdjustList = [0,0,0,0,0,0,0,0,0]
var coinAdjustList = new Array(9);

function coinAdjust() {
    for (i = 0; i <= 8; i++) {
        coinAdjustList[i] = document.getElementById("coinAdjust" + parseInt(i + 1)).value;
    }
}

// 合計當次下注金額 totallInsert
var totallInsert = 0;

function totall() {
    for (i = 0; i < 8; i++) {
        totallInsert = parseInt(totallInsert) + parseInt(coinAdjustList[i]);
    }
}

// 清空投注金額
function clearAdjust() {
    totallInsert = 0;
    coinAdjustList = [0, 0, 0, 0, 0, , 0, 0, 0, 0];
}

// 轉動畫面,靜止後返還中獎金額並清除下注金額
var runEndNum = 0;
function run() {
    var t = 50;
    var times = 1;
    let startGame = setTimeout(function go() {
        for (j = 1; j <= 28; j++) { //把所有格子改成白底
            document.getElementById(j).className = "normal";
        }
        document.getElementById(list[runEndNum]).className = "yellowLight"; // 把該格子改成紅底
        runEndNum++;
        times++;
        if (runEndNum >= 28) {
            runEndNum = 0;
        }
        if (times >= 42) {
            if (randNum - 14 > 0 && randNum - 14 == runEndNum) {
                t = 500;
            } else if (randNum - 14 <= 0 && randNum + 14 == runEndNum) {
                t = 500;
            }
        }
        startGame = setTimeout(go, t);
        if (t == 500 && randNum == runEndNum) {
            clearTimeout(startGame);
            coin.value = parseInt(coin.value) + result;
            clearAdjust();
            lockClick();
        }

    }, 20)
}

// 鎖定/解鎖按鍵
var isClick = false;

function lockClick() {
    isClick = !isClick;
    document.getElementById("startButton").disabled = isClick ? true : false;
    document.getElementById("finishButton").disabled = isClick ? true : false;
}

// 遊戲開始
var result = 0;
var randNum = 0;

function btnStart() {
    lockClick();
    coinAdjust(); // 輸出 投注金額陣列 coinAdjustList[i]
    totall(); // 輸出 投注金額總計 totallInsert
    if (totallInsert != 0) { //未下注則不執行
        $.ajax({
            async: true, //啟用同步請求
            type: "POST",
            url: "/LittleMary",
            dataType: "json",
            data: {
                'bet': coinAdjustList,
                'MaryCoin': coin.value
            },
            success: function (response) {
                randNum = response["number"];
                result = response["coin"];
                console.log("中獎數字:" + randNum);
                console.log("獎金:" + result);
            },
            error: function () {
                alert("發生錯誤startButton");
            }
        })

        for (i = 0; i <= 8; i++) {
            document.getElementById("coinAdjust" + parseInt(i + 1)).value = 0;
        }
        run();
    } else {
        lockClick();
        alert("請下注");
    }
}

// 結束遊戲返還餘額至玩家儲值金
function btnFinish() {
    coinAdjust();
    totall();
    coin.value = parseInt(coin.value) + totallInsert;
    clearAdjust();
    for (i = 0; i <= 8; i++) {
        document.getElementById("coinAdjust" + parseInt(i + 1)).value = 0;
    }

    if (confirm("遊戲結束,即將返還您的遊戲餘額至您的帳號,確定要離開嗎?")) {
        var d = new Date();
        alert("返還金額 :" + coin.value + ", 時間:" + d.getFullYear() + "年" + d.getMonth() + "月" +
            d.getDate() + "日" + d.getHours() + "時" + d.getMinutes() + "分" + d.getSeconds() + "秒");

        $.ajax({
            async: false, //啟用同步請求
            type: "POST",
            url: "../",
            dataType: "json",
            data: coin.value,
            success: function () {
                alert("OKfinishButton")
            },
            error: function () {
                alert("發生錯誤finishButton");
            }
        })

    } else {
        alert("遊戲繼續");
    }

}
