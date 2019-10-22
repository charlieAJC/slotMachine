$(document).ready(function(){
    // // 按按鈕改變圖片
    // for(i=1;i<7;i++){
    //     var id = "#btn" + i;
    //     $(id).click(function(){
    //         var suffix = this.id.match(/\d+/);
    //         var newClass = "slot slot" + suffix
    //         $("#img1").removeClass();
    //         $("#img1").addClass(newClass);
    //     });
    // }

    // 為intervel的名稱，以便關閉時可以呼叫
    var timerFlag;
    // 確認拉霸機畫面是否在轉動
    var rollFlag = 0;
    var endImg;
    // 設定起始圖案組合
    var setFlag;
    // 籌碼id對應籌碼的值
    var chipArr = [5, 10, 50, 100];

    for(let i=0;i<4;i++){
        // 游標 移動/離開 籌碼圖案的變化
        $("#chip"+i).mouseover(function(){
            if(rollFlag === 0){
                $("#chip"+i).css("opacity","1.0");
            }
        });

        $("#chip"+i).mouseout(function(){
            if(rollFlag === 0){
                $("#chip"+i).css("opacity","0.7");
            }
        });

        // 點選籌碼增加總值
        $("#chip"+i).click(function(){
            if(rollFlag === 0){
                chip = $("#totalChip").text();
                chip = parseInt(chip) + chipArr[i];
                coin = $("#navCoin").text().match(/\d+/);
                if(chip > parseInt(coin)){
                    alert("You don't have enough coin!");
                } else {
                    $("#totalChip").text(chip);
                }
            }
        });
    }

    // 籌碼歸零
    $("#resetChip").click(function(){
        if(rollFlag === 0){
            $("#totalChip").text(0);
        }
    })

    // 切換拉霸機圖片
    function rollImg(){
        if(setFlag == 0){
            $("#img1").removeClass();
            $("#img1").addClass("slot slot1");
            $("#img2").removeClass();
            $("#img2").addClass("slot slot2");
            $("#img3").removeClass();
            $("#img3").addClass("slot slot3");
            setFlag = 1;
        } else {
            for(var i=1;i<4;i++){
                var divId = String("#img" + i);
                var oldClass = $(divId).attr('class');
                var suffix = oldClass.match(/\d+/);
                suffix >= 6 ? suffix = 1 : suffix++;
                suffix = suffix.toString();
                var newClass = String("slot slot" + suffix)
                $(divId).removeClass();
                $(divId).addClass(newClass);
                
            }
        }
    };
    
    $("#casinoShuffle").click(function(){
        // 注意函數名稱不用括弧!
        chip = $("#totalChip").text();
        if(chip != 0){
            if(rollFlag === 0){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "POST",
                    url: "slot",
                    data: {
                        "slot" : "1",
                        "cost" : $("#totalChip").text()
                    },
                    success: function(e){
                        if(e == "Oops"){
                            alert("over bet!");
                            location.reload();
                        } else {
                            setFlag = 0;
                            timerFlag = setInterval(rollImg,50);
                            rollFlag = 1;
                            var data = JSON.parse(e);
                            endImg = data;
                        }
                    }
                })
            }
        } else {
            alert("Please set your chip");
        }
    });

    $("#casinoStop").click(function(){
        if(rollFlag === 1){
            clearInterval(timerFlag);
            setFlag = 0;
            rollFlag = 0;

            // 圖案定點
            for(var j=1;j<4;j++){
                var divId = "#img" + j;
                var newClass = "slot slot" + endImg[j];
                $(divId).removeClass();
                $(divId).addClass(newClass);
            }

            // console.log(endImg);

            $("#navCoin").text("現有: " + endImg["coin"] + "代幣")
            // coin = endImg["coin"];
            // $("#totalChip").text(coin);
        }
    });
    
})