@extends('fronted.layouts.master')

@section('title', 'buy')

@section('content')

<div class="container">
    <h2 class="mt-4 mb-3">購點儲值</h2>
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
        <img src="img\fronted\buy\jkopc.png" style="background-color:grey;" id="jkBuy">
        <img src="img\fronted\buy\shineidianhua_pc_tw.png" style="background-color:grey;" id="chtBuy">
    </div>

    {{-- 用js更改敘述內容 --}}
    <div>
        <p id="buyDesc">使用街口支付App掃描網頁內付款QRCode碼，並以「街口帳戶」餘額付款或連結「銀行帳戶」付款</p>
    </div>

    <div style="width: 415px; flex: 0 1 auto;">
        <table id="buyPlan">
            <tr>
                <th></th>
                <th>價格</th>
                <th>點數</th>
            </tr>
            <tr>
                <td>NT$ 100</td>
                <td>貝殼幣 × 140</td>
            </tr>
            <tr>
                <td>NT$ 250</td>
                <td>貝殼幣 × 350</td>
            </tr>
            <tr>
                <td>NT$ 500</td>
                <td>貝殼幣 × 700</td>
            </tr>
            <tr>
                <td>NT$ 1000</td>
                <td>貝殼幣 × 1400</td>
            </tr>
            <tr>
                <td>NT$ 2500</td>
                <td>貝殼幣 × 3500</td>
            </tr>
        </table>
    </div>

    {{-- <div style="width: 415px; flex: 0 1 auto;">
        <table>
            <tr>
                <th>價格</th>
                <th>點數</th>
            </tr>
            <tr>
                <td>NT$ 100</td>
                <td>貝殼幣 × 140</td>
            </tr>
            <tr>
                <td>NT$ 250</td>
                <td>貝殼幣 × 350</td>
            </tr>
            <tr>
                <td>NT$ 500</td>
                <td>貝殼幣 × 700</td>
            </tr>
            <tr>
                <td>NT$ 1000</td>
                <td>貝殼幣 × 1400</td>
            </tr>
        </table>
    </div> --}}

    <div>
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
    {{-- ------------景翔CSS很智障的儲值表格------------ --}}




    {{-- <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h3 class="card-header">Basic</h3>
                <div class="card-body">
                    <div class="display-4">$19.99</div>
                    <div class="font-italic">per month</div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">
                        <a href="#" class="btn btn-primary">Sign Up!</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card card-outline-primary h-100">
                <h3 class="card-header bg-primary text-white">Plus</h3>
                <div class="card-body">
                    <div class="display-4">$39.99</div>
                    <div class="font-italic">per month</div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">
                        <a href="#" class="btn btn-primary">Sign Up!</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h3 class="card-header">Ultra</h3>
                <div class="card-body">
                    <div class="display-4">$159.99</div>
                    <div class="font-italic">per month</div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">
                        <a href="#" class="btn btn-primary">Sign Up!</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
</div>
{{-- <script src="{{ asset('js/fronted/buy.js') }}"></script> --}}

@endsection