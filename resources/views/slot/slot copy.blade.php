<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <title>Slot</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/slot/style copy.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/slot/slotmachine.js"></script>

</head>

<body>
    <div class="container-fluid">
        @include('fronted.layouts.navbar')

        <div class="row" >
            <div class="col-md-3">
                <div class="money">
                    <img alt="" src="../../img/slot/chip5.png">
                    <img alt="" src="../../img/slot/chip10.png">
                    <img alt="" src="../../img/slot/chip50.png">
                    <img alt="" src="../../img/slot/chip100.png">
                </div>
            </div>
            <div class="col-md-6">
                <div class="machine">
                    <img alt="" src="../../img/slot/machine.png">
                </div>
                <div class="casino">
                    <div id="casino1" class="slotMachine">
                        <div id="img1" class="slot slot1"></div>
                    </div>
                    <div id="casino2" class="slotMachine">
                        <div id="img2" class="slot slot2"></div>
                    </div>    
                    <div id="casino3" class="slotMachine">
                        <div id="img3" class="slot slot3"></div>
                    </div>
                </div> 
                <div class="btn-group">
                    <button id="casinoShuffle" class="button btn-light col-sm-4">Shuffle!</button>
                    <button id="casinoStop" class="button btn-light col-sm-4">Stop!</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="money">
                    <img alt="" src="../../img/slot/chip5.png">
                    <img alt="" src="../../img/slot/chip10.png">
                    <img alt="" src="../../img/slot/chip50.png">
                    <img alt="" src="../../img/slot/chip100.png">
                </div>
            </div>
        </div>

        @include('fronted.layouts.footer')

    </div>
</body>

</html>