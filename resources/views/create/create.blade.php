<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Create</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .text-center {
            font-family: "Microsoft JhengHei";
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="create.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin">
        <img class="mb-4" src="../img/gambler.png" alt="" width="80" height="80">
        <h1 class="h3 mb-3 font-weight-normal">註冊帳號</h1>
        <label for="inputName" class="sr-only">姓名</label>
        <input type="name" id="inputName" class="form-control" placeholder="姓名" required autofocus>
        <label for="inputEmail" class="sr-only">電子郵件地址</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="電子郵件地址" required>
        <label for="inputPassword" class="sr-only">密碼</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="密碼" required>
        <label>
            <input type="checkbox" value="remember-me"> 記住我
        </label>
        <button type="submit" class="btn btn-info btn-primary btn-block" onclick="document.getElementById('demo').innerHTML = Date()">送出</button>
        <p id="demo"></p>
        <button type="button" class="btn btn-light">回首頁</button>

        <p class="mt-5 mb-3 text-muted">&copy; slot machine</p>
    </form>
</body>

</html>