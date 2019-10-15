$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "manager",
        success: function(e){
            var data = JSON.parse(e);
            
            //遊玩比例
            var playTimes = [data.countMary,data.countSlot];
            var gameName = ["Mary", "Slot"];
            var ctx = document.getElementById("playTimesCanvas");
            var pieChart = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: gameName,
                    datasets: [{
                        data: playTimes,
                        backgroundColor: ["#3cba9f", "#c45850"]
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: '遊玩比例'
                    }
                }
            })

            var gameProfit = [data.maryProfit,data.slotProfit];
            var gameName = ["Mary", "Slot"];
            var ctx = document.getElementById("profitCanvas");
            var barChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: gameName,
                    datasets: [{
                        label:"Game",
                        data: gameProfit,
                        backgroundColor: ["#3cba9f","#c45850"],
                    },
                    
                    // {
                    //     label:"slot",
                    //     data:gameProfit,
                    //     backgroundColor:"#c45850",
                    // }
                ]
                }
            })





        }
    })
})