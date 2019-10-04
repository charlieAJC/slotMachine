<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand"  href="/">
        <img src="img/jackpot.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Slot Machine
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#game1" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    遊戲
                </a>
                <div id="game1" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><img src="img/fronted/jackpot.png" width="30" height="30">　拉霸機</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><img src="img/fronted/jackpot.png" width="30" height="30">　小瑪莉</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto mr-sm-2">
            <li class="nav-item active">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#game2" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    我的帳號
                </a>
                <div id="game2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login">登入</a>
                    <a class="dropdown-item" href="register">註冊帳號</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">帳號設定</a>
                </div>
            </li>
            <a class="nav-link" href="/">回首頁<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">購點/儲值</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">客服中心</a>
            </li>
            {{-- </form> --}}
        </ul>
    </div>
</nav>
{{-- Header End --}}