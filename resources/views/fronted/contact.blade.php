<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="description" content="">
    <meta name="author" content=""> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/top.css" rel="stylesheet">

</head>

<body>
    @include('fronted.layouts.navbar')

    <div class="container">
        {{-- <h2 class="mt-4 mb-3">客服中心</h2> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">客服中心</li>
        </ol>
        <div class="row">
            <div class="col-12 col-md-6 mb-5">
                <h3>聯絡方式</h3>
                <div class="mt-4 mb-4">
                    <p>
                        地　　址：12345 台中市678區90路一段1號2樓
                    </p>
                    <p>
                        客服專線：(01)2345-6789
                    </p>
                    <p>
                        電子郵件：<a href="mailto:name@example.com">name@example.com</a>
                    </p>
                    <p>
                        服務時間：週一至週五 09：00~18：00
                    </p>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9580.006706663693!2d120.65057190206174!3d24.14917635556943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d9651ad5dbf%3A0x6762069c31f45f09!2z5ZyL5rOw5Lq65aO95YWs55uK5aSn5qiT!5e0!3m2!1szh-TW!2stw!4v1571072021062!5m2!1szh-TW!2stw"
                        width="90%" height="240px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <h3>遊戲問題回報中心</h3>
                <form class="mt-4 mb-5" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="遊戲帳號" id="name" required autofocus
                                data-validation-required-message="請輸入您的遊戲帳號">
                            <p class="help-block"></p>
                            {{-- <span class='error2'></span> --}}

                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="tel" class="form-control" placeholder="連絡電話" id="phone" required
                                data-validation-required-message="請輸入連絡電話">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="email" class="form-control" placeholder="聯絡Email" id="email" required
                                data-validation-required-message="請輸入正確可聯絡的email信箱">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <textarea rows="7" cols="100" class="form-control" placeholder="問題內容詳述" id="message"
                                required data-validation-required-message="請詳述您的問題，以便能更準確了解您的問題並盡快處理回覆" maxlength="999"
                                style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-info btn-primary btn-block" id="sendMessageButton">送出</button>
                </form>
            </div>
        </div>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <footer class="py-1 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Slot Machine 2019</p><br>
            {{-- <p class="m-0 text-center"><a href="#" class="text-white">Back to top</a></p> --}}
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/fronted/top.js"></script>
    <script src="js/fronted/contact.js"></script>
    <script src="js/fronted/index.js"></script>
    <script src="js/fronted/logout.js"></script>

</body>

</html>