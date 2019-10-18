<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Buy</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/top.css" rel="stylesheet">
    {{-- <script src="jquery/jquery.min.js"></script> --}}
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    {{-- <script src="js/fronted/top.js"></script> --}}
<style>

</style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Slot Machine</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="game">遊戲介紹</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buy" id="navBuy" style="display:none">購點 / 儲值</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">客服中心</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login" id="navLogin" style="display:none">登入會員</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register" id="navRegister" style="display:none">註冊帳號</a>
                    </li>

                    {{-- 登入成功才會顯示的下拉式選單 --}}
                    <li class="nav-item dropdown" id="navAccount" style="display:none">
                        <a class="nav-link dropdown-toggle" href=".dropdown-menu" id="navbardrop"
                            data-toggle="dropdown">
                            使用者帳號
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="update">更改個人資料</a>
                            <a class="dropdown-item" href="#" id="navLogout">登出</a>
                        </div>
                    </li>
                    {{-- 登入成功才會顯示的下拉式選單 --}}

                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="position:relative">
        {{-- <h2 class="mt-4 mb-3">購點儲值</h2> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">購點儲值</li>
        </ol>
        <div>
            <p>儲值方法</p>
        </div>
    
        <nav class="navbar navbar-expand-lg">
            <div>
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#jkopay" data-toggle="tab"><img src="img\fronted\buy\jkopay.png" alt=""></a>
                </li>   
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#visa" data-toggle="tab"><img src="img\fronted\buy\visa.png" alt=""></a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#atm" data-toggle="tab" ><img src="img\fronted\buy\ATM.png" alt=""></a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#cht" data-toggle="tab"><img src="img\fronted\buy\CHT.png" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#farpass" data-toggle="tab"><img src="img\fronted\buy\FarPass.png" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#taiwanmobile" data-toggle="tab"><img src="img\fronted\buy\TaiwanMobile.png" alt=""></a>
                </li>
            </ul>
        </div>
        </nav>
    
        {{-- 用js更改敘述內容 --}}
    
        <div class="tab-content">
            {{-- 街口支付 --}}
            <div id="jkopay" class="tab-pane fade show active">
                <form action="" >
                    <div>街口支付</div>
                    <div>
                        <p id="buyDesc">使用街口支付App掃描網頁內付款QRCode碼，並以「街口帳戶」餘額付款或連結「銀行帳戶」付款</p>
                    </div>
    
                    <div>
                        <div style="width:50%;float:left">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th >價格</th>
                                    <th >點數</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="radio" name="price" id="jko100" value="NT$ 100,遊戲幣 × 300" checked><label for="jko100">NT$ 100</label></td>
                                    <td><label for="jko100">遊戲幣 × 300</label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="jko250" value="NT$ 250,遊戲幣 × 800"><label for="jko250">NT$ 250</label></td>
                                    <td><label for="jko250">遊戲幣 × 800</label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="jko500" value="NT$ 500,遊戲幣 × 1700"><label for="jko500">NT$ 500</label></td>
                                    <td><label for="jko500">遊戲幣 × 1700</label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="jko1000" value="NT$ 1000,遊戲幣 × 3500"><label for="jko1000">NT$ 1000</label></td>
                                    <td><label for="jko1000">遊戲幣 × 3500</label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="jko2500" value="NT$ 2500,遊戲幣 × 8000"><label for="jko2500">NT$ 2500</label></td>
                                    <td><label for="jko2500">遊戲幣 × 8000</label></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
    
                        <div style="width:50%;float:left" id="buycontent">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th colspan="2">確認購買內容</th>
                                </tr>
                                 </thead>
                                 <tbody>
                                <tr>
                                    <td>商品</td>
                                    <td id="cointable">遊戲幣 × 300</td>
                                </tr>
                                <tr>
                                    <td>價格</td>
                                    <td id="pricetable">NT$ 100</td>
                                </tr>
                                <tr>
                                    <td>付費方式</td>
                                    <td>街口支付</td>
                                </tr>
                                <tr>
                                <td colspan="2">
                                
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="agree">
                                        <label class="form-check-label" for="agree">
                                            我同意會員系統服務合約、個人資料隱私權保護政策未滿20歲之消費者，應由法定代理人閱讀並同意上述合約後，方得使用本儲值服務。
                                        </label>
                                    </div>  
                                <button class="btn btn-primary btn-lg btn-block  "data-toggle="button" id="confirm" disabled>確認</button>
                                </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="width:50%;float:left;text-align: center;display:none" id="QRdiv">
                        <div style="text-align: center">請開啟「街口支付App」，點選「掃描條碼」功能，掃描下方</div>
                        <div style="text-align: center"> QRCode</div>
                        <div>
                            <img src="img\fronted\buy\jkoQR.png" alt="" id="QRcode" style="width:200px;height:200px;text-align: center ">
                        </div>
                        <div style="text-align: center;color:gray">付款完成後，請點選下方按鈕</div>
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="jkofinishstore">付款完成</button>
                    </div>
                        
                    </div>
                </form>
            </div>
    
    
            {{-- cht --}}
            <div id="cht" class="tab-pane fade">
                    <form action="" >
                        <div>中華電信手機</div>
                        <div>
                            <p id="buyDesc">系統認證您的個資後，將發送簡訊至您的手機，請直接回覆該簡訊之驗證碼，待收到付款完成的簡訊通知後，請在頁面上按下「確定」按鈕，即完成流程並獲得貝殼幣。</p>
                        </div>
        
                        <div>
                            <div style="width:50%;float:left">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th >價格</th>
                                        <th >點數</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="radio" name="price" id="cht100" value="NT$ 100,遊戲幣 × 300" checked><label for="cht100">NT$ 100</label></td>
                                        <td><label for="cht100">遊戲幣 × 300</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="price" id="cht250" value="NT$ 250,遊戲幣 × 800"><label for="cht250">NT$ 250</label></td>
                                        <td><label for="cht250">遊戲幣 × 800</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="price" id="cht500" value="NT$ 500,遊戲幣 × 1700"><label for="cht500">NT$ 500</label></td>
                                        <td><label for="cht500">遊戲幣 × 1700</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="price" id="cht1000" value="NT$ 1000,遊戲幣 × 3500"><label for="cht1000">NT$ 1000</label></td>
                                        <td><label for="cht1000">遊戲幣 × 3500</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="price" id="cht2500" value="NT$ 2500,遊戲幣 × 8000"><label for="cht2500">NT$ 2500</label></td>
                                        <td><label for="cht2500">遊戲幣 × 8000</label></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
        
                            <div style="width:50%;float:left" id="chtbuycontent">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">確認購買內容</th>
                                    </tr>
                                     </thead>
                                     <tbody>
                                    <tr>
                                        <td>商品</td>
                                        <td id="chtcointable">遊戲幣 × 300</td>
                                    </tr>
                                    <tr>
                                        <td>價格</td>
                                        <td id="chtpricetable">NT$ 100</td>
                                    </tr>
                                    <tr>
                                        <td>付費方式</td>
                                        <td>中華電信</td>
                                    </tr>
                                    <tr>
                                            <td colspan="2">
                                                <div class="form-group">
                                                        <label for="exampleInputText">中華電信手機門號</label>
                                                        <input type="text" class="form-control" id="InputCellphone" aria-describedby="emailHelp" placeholder="輸入您的手機號碼">
                                                        <small id="emailHelp" class="form-text text-muted">將傳送簡訊驗證碼至您所輸入的手機</small>
                                                </div>
                                                <div>輸入您所收到的簡訊驗證碼</div>

                                                <div>
                                                    <div class="col-md-4 mb-3">
                                                        {{-- <label for="validationDefault01">First name</label> --}}
                                                        <input type="text" class="form-control" id="validationDefault01" placeholder="驗證碼"required>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                        <div class="input-group-append">
                                                          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                                                        </div>
                                                      </div>
                                            </td>
                                    <tr>
                                    <td colspan="2">
                                    
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="chtagree">
                                            <label class="form-check-label" for="chtagree">
                                                我同意會員系統服務合約、個人資料隱私權保護政策未滿20歲之消費者，應由法定代理人閱讀並同意上述合約後，方得使用本儲值服務。
                                            </label>
                                        </div>  
                                    <button class="btn btn-primary btn-lg btn-block  "data-toggle="button" id="chtconfirm" disabled>確認</button>
                                    </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="width:50%;float:left;text-align: center;display:none" id="chtVerification">
                            
                            <div style="text-align: center;color:gray">付款完成後，請點選下方按鈕</div>
                            <button type="button" class="btn btn-primary btn-lg btn-block">付款完成</button>
                        </div>
                            
                        </div>
                    </form>
                </div>

            <div style="clear:both"></div>
        </div>




    </div>
    {{-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> --}}

    <footer class="py-1 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Slot Machine 2019</p><br>
            {{-- <p class="m-0 text-center"><a href="#" class="text-white">Back to top</a></p> --}}
        </div>
    </footer>
    <script>
        var dfg = "";
        //勾選同意才可點確認
      $('#agree').click(function () {
        if($('#agree').is(':checked')){
            $("#confirm").attr('disabled',false);         
        }else{
            $("#confirm").attr('disabled',true);      
        } 
      })
        //街口QRCode畫面
      $("#confirm").click(function(){
          $("#buycontent").hide();
          $("#QRdiv").show();
      })
       //更改購買內容資料
      $('input[type=radio][name="price"]').change(function() {
         var arr=new Array();
         var pricecoin=this.value;
         arr=pricecoin.split(',');
          
         document.getElementById("pricetable").innerHTML = arr[0] ;
         document.getElementById("cointable").innerHTML = arr[1] ;

      })
      $("#jkofinishstore").click(function(){
          var howmuch=document.getElementById("pricetable").innerHTML;
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "buy",
                datatype:"json",
                data: {
                    "MoneyOrigin" : "JkoPay",
                    "storemoney" : howmuch
                },
                success: function(response){
                    var data = JSON.parse(response);
                    // dfg = response["qwe"];
                   console.log(data);
                }
            })
      })

        //中華付款
        //勾選同意才可點確認
      $('#chtagree').click(function () {
        if($('#chtagree').is(':checked')){
            $("#chtconfirm").attr('disabled',false);         
        }else{
            $("#chtconfirm").attr('disabled',true);      
        } 
      })
    //   $("#chtconfirm").click(function(){
    //       $("#chtbuycontent").hide();
    //       $("#chtVerification").show();
    //   })
       //更改購買內容資料
      $('input[type=radio][name="price"]').change(function() {
         var arr=new Array();
         var pricecoin=this.value;
         arr=pricecoin.split(',');
          
         document.getElementById("chtpricetable").innerHTML = arr[0] ;
         document.getElementById("chtcointable").innerHTML = arr[1] ;

      })
    </script>
    

</body>

</html>