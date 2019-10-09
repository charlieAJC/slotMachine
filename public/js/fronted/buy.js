$(document).ready(function () {
    // 儲值方法說明
    $("#jkBuy").click(function () {
        $("#payDesc").text("使用街口支付App掃描網頁內付款QRCode碼，並以「街口帳戶」餘額付款或連結「銀行帳戶」付款");
        $("#buyPlan").html("<tr><th>價格</th><th>點數</th></tr>");
        $("#buyPlan").append("<tr><td>NT$ 100</td><td>貝殼幣 × 140</td></tr>");
        $("#buyPlan").append("<tr><td>NT$ 250</td><td>貝殼幣 × 350</td></tr>");
        $("#buyPlan").append("<tr><td>NT$ 500</td><td>貝殼幣 × 700</td></tr>");
        $("#buyPlan").append("<tr><td>NT$ 1000</td><td>貝殼幣 × 1400</td></tr>");
        $("#buyPlan").append("<tr><td>NT$ 2500</td><td>貝殼幣 × 3500</td></tr>");
    });

    $("#chtBuy").click(function () {
        alert("12300");
        $("#payDesc").text("系統認證您的個資後，將請您使用市話撥打認證專線，完成認證後即可獲得貝殼幣。");
        // $("#buyPlan").html("<tr><th>價格</th><th>點數</th></tr>");
        // $("#buyPlan").append("<tr><td>NT$ 100</td><td>貝殼幣 × 140</td></tr>");
        // $("#buyPlan").append("<tr><td>NT$ 250</td><td>貝殼幣 × 350</td></tr>");
        // $("#buyPlan").append("<tr><td>NT$ 500</td><td>貝殼幣 × 700</td></tr>");
        // $("#buyPlan").append("<tr><td>NT$ 1000</td><td>貝殼幣 × 1400</td></tr>");
    });


})