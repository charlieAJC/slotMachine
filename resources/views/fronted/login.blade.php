@extends('fronted.layouts.master')

@section('title', 'login')

@section('content')
<<<<<<< HEAD
    
<div class="row">
    <div class="col-sm-7 carousel slide" id="demo" data-ride="carousel">
        <div class="slideGrp">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1" class=""></li>
                <li data-target="#demo" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://fakeimg.pl/1920x1080" width="100%" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="https://fakeimg.pl/1920x1080" width="100%" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="https://fakeimg.pl/1920x1080" width="100%" height="100%">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <div class="col-sm-5" id="form-signin">
        <form id="user_login" method="POST">
            @csrf
            <img class="mb-4" src="img/gambler.png" alt="" width="80" height="80">
            <h1 class="h3 mb-3 font-weight-normal">登入</h1>
            <label for="account" class="sr-only">帳號</label><input type="account" id="account" class="form-control"
                placeholder="帳號" required><span class='error2'></span><br>
            <label for="password" class="sr-only">密碼</label><input type="password" id="password" class="form-control"
                placeholder="密碼" required><span class='error4'></span><br>
            <button type="button" id="login" class="btn btn-info btn-primary btn-block">登入</button><br>
            <button type="button" class="btn btn-light"><a href="register">註冊帳號</a></button>
            <button type="button" class="btn btn-light"><a href="/">回首頁</a></button>
            <div id="login_success" style="display:none;"></div>
        </form>
        <div id="errormsg" style="color: red"></div>
    </div>
</div>
@endsection
=======
{{-- <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 50pt;
        /* height: 50pt; */
    }
    </style> --}}
<div id="demo" class="carousel slide" data-ride="carousel">

    {{-- <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner" >
        <div class="carousel-item active">
            <img src="https://fakeimg.pl/100" alt="Los Angeles"  width="100" height="100">
        </div>
        <div class="carousel-item">
            <img src="https://fakeimg.pl/100" alt="Chicago">
        </div>
        <div class="carousel-item">
            <img src="https://fakeimg.pl/100" alt="New York">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div> --}}

<div id="form-signin">
    {{-- <form id="user_login" method="POST"> --}}
        @csrf
        <br>
        <img class="mb-4" src="img/gambler.png" alt="" width="80" height="80">
        <h1 class="h3 mb-3 font-weight-normal">登入</h1>
        <label for="account" class="sr-only">帳號</label><input type="account" id="account" class="form-control"
            placeholder="帳號" required><span class='error2'></span><br>
        <label for="password" class="sr-only">密碼</label><input type="password" id="password" class="form-control"
            placeholder="密碼" required><span class='error4'></span><br>
        <button type="button" id="login" class="btn btn-info btn-primary btn-block">登入</button><br>

        <button type="button" class="btn btn-light"><a href="register">註冊帳號</a></button>
        <button type="button" class="btn btn-light"><a href="/">回首頁</a></button>

        <div id="login_success" style="display:none;"></div>
    {{-- </form> --}}
    <div id="errormsg" style="color: red"></div>
</div>
@endsection
>>>>>>> 5a799645043d43fb55a078e77f5f157c535672a7
