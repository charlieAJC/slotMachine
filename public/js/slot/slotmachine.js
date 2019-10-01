// 命名原則
// CSS能省則省
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
    var setFlag = 0;
    function rollImg(){
        for(var i=1;i<4;i++){
            if(setFlag === 0){
                var divId = "#img" + i;
                var newClass = "slot slot" + i
                $(divId).removeClass();
                $(divId).addClass(newClass);
            } else {
                var divId = "#img" + i;
                var oldClass = $(divId).attr('class');
                var suffix = oldClass.match(/\d+/);
                suffix >= 6 ? suffix = 1 : suffix++;
                var newClass = "slot slot" + suffix
                $(divId).removeClass();
                $(divId).addClass(newClass);
            }
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
            timerFlag = setInterval(rollImg,100);
            setFlag = 1;
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