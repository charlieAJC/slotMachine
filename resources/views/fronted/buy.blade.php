@extends('fronted.layouts.master')

@section('title', 'buy')

@section('content')
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<div class="container" style="position:relative">
    {{-- <h2 class="mt-4 mb-3">購點儲值</h2> --}}
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">首頁</a>
        </li>
        <li class="breadcrumb-item active">購點儲值</li>
    </ol>
    {{-- ------------景翔CSS很智障的儲值表格------------ --}}
    <div>
        <p>儲值方法</p>
    </div>

    <div>
        <ul class="list-inline">
            <li><a href="#jkopay" data-toggle="tab"><img src="img\fronted\buy\jkopay.png" style="background-color:grey"
                        alt=""></a></li>
            <li><a href="#visa" data-toggle="tab"><img src="img\fronted\buy\visa.png" style="background-color:grey"
                        alt="" jj></a></li>
            <li><a href="#atm" data-toggle="tab"><img src="img\fronted\buy\ATM.png" style="background-color:grey"
                        alt=""></a></li>
            <li><a href="#cht" data-toggle="tab"><img src="img\fronted\buy\CHT.png" style="background-color:grey"
                        alt=""></a></li>
            <li><a href="#farpass" data-toggle="tab"><img src="img\fronted\buy\FarPass.png"
                        style="background-color:grey" alt=""></a></li>
            <li><a href="#taiwanmobile" data-toggle="tab"><img src="img\fronted\buy\TaiwanMobile.png"
                        style="background-color:grey" alt=""></a></li>
        </ul>
    </div>

    {{-- 用js更改敘述內容 --}}

    <div class="tab-content">
        {{-- 街口支付 --}}
        <div id="jkopay" class="tab-pane fade in active">
            <form action="">
                <div>街口支付</div>
                <div>
                    <p id="buyDesc">使用街口支付App掃描網頁內付款QRCode碼，並以「街口帳戶」餘額付款或連結「銀行帳戶」付款</p>
                </div>

                <div style="width: 100%; flex: 0 1 auto;">
                    <div style="width:50%;float:left">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="text-align: center">價格</th>
                                <th style="text-align: center">點數</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="radio" name="price" id="jko100"><label for="jko100">NT$ 100</label></td>
                                <td><label for="jko100">貝殼幣 × 140</label></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="jko250"><label for="jko250">NT$ 250</label></td>
                                <td><label for="jko250">貝殼幣 × 350</label></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="jko500"><label for="jko500">NT$ 500</label></td>
                                <td><label for="jko500">貝殼幣 × 700</label></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="jko1000"><label for="jko1000">NT$ 1000</label></td>
                                <td><label for="jko1000">貝殼幣 × 1400</label></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="jko2500"><label for="jko2500">NT$ 2500</label></td>
                                <td><label for="jko2500">貝殼幣 × 3500</label></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>

                    <div style="width:50%;float:left">
                        <table>
                            <tr>
                                <th>確認購買內容</th>
                            </tr>
                            <tr>
                                <td>商品</td>
                                <td>貝殼幣 × 140</td>
                            </tr>
                            <tr>
                                <td>價格</td>
                                <td>NT$ 100</td>
                            </tr>
                            <tr>
                                <td>付費方式</td>
                                <td>街口支付</td>
                            </tr>
                        </table>
                        <input type="checkbox" id="agree">
                        <label for="agree">
                            我同意會員系統服務合約、個人資料隱私權保護政策未滿20歲之消費者，
                            應由法定代理人閱讀並同意上述合約後，方得使用本儲值服務。
                        </label>
                        <br>
                        <button>同意</button>
                    </div>
                </div>
            </form>
        </div>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/top.css" rel="stylesheet">

        {{-- VISA --}}
        <div id="visa" class="tab-pane fade">
            <div id="visa">
                <div>
                    <p id="buyDesc">使用VISA或MASTER 3D驗證信用卡，享受最便利又安全的儲值體驗。</p>
                </div>

                <div style="width: 100%; flex: 0 1 auto;">
                    <div style="width:50%;float:left">
                        <table id="buyPlan">
                            <tr>
                                <th>價格</th>
                                <th>點數</th>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="">NT$ 100</td>
                                <td>貝殼幣 × 140</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="">NT$ 250</td>
                                <td>貝殼幣 × 350</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="">NT$ 500</td>
                                <td>貝殼幣 × 700</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="">NT$ 1000</td>
                                <td>貝殼幣 × 1400</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="">NT$ 2500</td>
                                <td>貝殼幣 × 3500</td>
                            </tr>
                        </table>
                    </div>

                    <div style="width:50%;float:left">
                        <table>
                            <tr>
                                <th>新增信用卡</th>
                            </tr>
                            <tr>
                                <td>商品</td>
                                <td>貝殼幣 × 140</td>
                            </tr>
                            <tr>
                                <td>價格</td>
                                <td>NT$ 100</td>
                            </tr>
                            <tr>
                                <td>付費方式</td>
                                <td>街口支付</td>
                            </tr>
                        </table>
                        <input type="checkbox" id="agree">
                        <label for="agree">
                            我同意會員系統服務合約、個人資料隱私權保護政策未滿20歲之消費者，
                            應由法定代理人閱讀並同意上述合約後，方得使用本儲值服務。
                        </label>
                        <br>
                        <button>同意</button>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
    <script>
    // $(document).ready(function(){
//  $("#jkopay").click(function(){
//   $("#visa").hide();
//   })
// });

    </script>

{{-- https://bootstrap.hexschool.com/ --}}

    {{-- <script src="{{ asset('js/fronted/buy.js') }}"></script> --}}

    @endsection
