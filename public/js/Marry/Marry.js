//產生格子id list = [1,2,3,....,28]
var list = new Array(28);

function addNumber() {
    for (i = 0; i <= 27; i++) {
        list[i] = i + 1;
    }
}
addNumber();

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

// 預儲遊戲機台,扣玩家儲值金
function btnInsert() {
    
        coin.value = parseInt(coin.value) + insertMoney;
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
var jsonCoinAdjustList = new Array(9);
function coinAdjust() {
    for (i = 0; i <= 8; i++) {
        coinAdjustList[i] = document.getElementById("coinAdjust" + parseInt(i + 1)).value;
    }
    for (i = 0; i <= 8; i++) {
        jsonCoinAdjustList[i] = {
            "value": coinAdjustList[i]
        };
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
    jsonCoinAdjustList = [0, 0, 0, 0, 0, , 0, 0, 0, 0];
}

// 中獎金額計算 改由後端提供
var result = 0;

function Calculation() {
    for (i = 0; i <= 27; i++) {
        if (list[i] == randNum) {
            result = odds[typeOf[i] - 1] * coinAdjustList[typeOf[i] - 1];
            console.log("中獎數字:" + randNum);
            console.log("中獎金額:" + result + "=賠率:" + odds[typeOf[i] - 1] + "*下注金額:" + coinAdjustList[typeOf[i] - 1]);
        }
    }
}

// 轉動畫面,靜止後返還中獎金額並清除下注金額
var runEndNum = 0;
var temp = 0;

function run() {
    var t = 20;
    var a = 1;
    let startGame = setTimeout(function go() {
        for (j = 1; j <= 28; j++) { //把所有格子改成白底
            document.getElementById(j).className = "normal";
        }
        document.getElementById(list[runEndNum]).className = "yellowLight"; // 把該格子改成紅底
        runEndNum++;
        if (runEndNum >= 28) {
            runEndNum = 0;
        }
        a = a.toFixed(8) * 1.0005;
        t = t.toFixed(8) * a;
        startGame = setTimeout(go, t);
        if (t > 500 && randNum == runEndNum) {
            clearTimeout(startGame);
            coin.value = parseInt(coin.value) + result; // 中獎金額返還
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
var randNum = 0;
var odds = [5, 3, 1.5, 1.2, 1, 0.8, 0.7, 0.6, 0.5] //賠率
var typeOf = [1, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6, 6, 7, 7, 7, 7, 8, 8, 8, 8, 9, 9, 9, 9] //格子種類
function btnStart() {
    lockClick();
    coinAdjust(); // 輸出 投注金額陣列 coinAdjustList[i]
    totall(); // 輸出 投注金額總計 totallInsert
    if (totallInsert != 0) { //未下注則不執行
        var sentCoinAdjustLis = JSON.stringify(jsonCoinAdjustList);
        randNum = Math.floor(Math.random() * 28 + 1); // 接收一個亂數 1~28
        for (i = 0; i <= 8; i++) {
            document.getElementById("coinAdjust" + parseInt(i + 1)).value = 0;
        }

        Calculation();
        temp = parseInt(coin.value) + result // 如中斷遊戲則先返還 temp 至玩家帳戶
        run();
        //如無中斷應從玩家帳戶取回
        temp = 0;
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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            async: false , //啟用同步請求
            type: "POST",
            url: "../",
            dataType: "json",
            data: coin.value ,
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

// 測試中, 後端給盤面配置
// $(document).ready(function () {
//     $.ajax({
//         type : "GET" ,
//         url : "" ,
//         dataType : "json" ,
//         success: function () {
//             alert("OKopenBroswer")
//             for(i=1;i<=28;i++){
//                 document.getElementById(i).style.backgroundImage = ;
//                 }
//             }
//         },
//         error: function () {
//             alert("發生錯誤openBroswer");

//         }
//     })
// }

$(document).ready(function () {
    $("#startButton").click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "post",
            url: "/LittleMary",
            dataType: "json",
            data: {
                'bet': coinAdjustList
            },
            success: function (e) {
                alert("OKstartButton");
                console.log(e, "OK");
            },
            error: function (e) {
                console.log(e);
                alert("發生錯誤startButton");
            }
        })
    })

    $("#finishButton").click(function () {
        $.ajax({
            type: "POST",
            url: "",
            dataType: "json",
            data: {
                餘額: coin.value,
            },
            success: function () {
                alert("OKfinishButton")
            },
            error: function () {
                alert("發生錯誤finishButton");
            }
        })
    })
});
