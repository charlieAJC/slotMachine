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

    // 設定起始圖案組合
    var setFlag;
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
            alert("");
        }
        
    };

    // 為intervel的名稱，以便關閉時可以呼叫
    var timerFlag;
    // 確認拉霸機畫面是否在轉動
    var rollFlag = 0;
    var endImg;

    $("#casinoShuffle").click(function(){
        // 注意函數名稱不用括弧!
        if(rollFlag === 0){
            setFlag = 0;
            timerFlag = setInterval(rollImg,50);
            rollFlag = 1;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "slot",
                data: {"slot" : "1"},
                success: function(e){
                    var data = JSON.parse(e);
                    endImg = data;
                }
            })
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

            console.log(endImg);
        }
    });
    
})