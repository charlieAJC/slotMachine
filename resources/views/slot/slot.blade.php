<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="description" content="">
    <meta name="author" content=""> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Slot</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/slot/style.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/slot/slotmachine.js"></script>
    <script src="js/fronted/index.js"></script>
    <script src="js/fronted/logout.js"></script>

</head>

<body>
    @include('fronted.layouts.navbar')
    
    <div class="header">
        <h2>Header</h2>
    </div>
    <div class="row">
        <div class="column side">
            <table class="none">
                <tr>
                    <td><img id="chip0" alt="" src="../../img/slot/chip5.png" height="120" width="120" style="opacity:0.5"></td>
                    <td><img id="chip1" alt="" src="../../img/slot/chip10.png" height="120" width="120" style="opacity:0.5"></td>
                </tr>
                <tr>
                    <td><img id="chip2" alt="" src="../../img/slot/chip50.png" height="120" width="120" style="opacity:0.5"></td>
                    <td><img id="chip3" alt="" src="../../img/slot/chip100.png" height="120" width="120" style="opacity:0.5"></td>
                </tr>
                <tr>
                    <td>
                        <span style="display:flex;justify-content:center">
                            <h3 style="display:inline">chip:</h3>
                            <h3 style="display:inline" id="totalChip">0</h3>
                        </span>
                    </td>
                    <td>
                        <button id="resetChip" class="btn btn-light">Reset</button>
                    </td>
                </tr>
            </table>
        </div>
        <div class="column middle">
            <div class="btn-group">
                <button id="casinoShuffle" class="button btn-light">Shuffle!</button>
                <button id="casinoStop" class="button btn-light">Stop!</button>
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
        </div>
        <div class="column side"></div>
    </div>

    <footer class="py-1 bg-dark fixed-bottom">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Slot Machine 2019</p><br>
            {{-- <p class="m-0 text-center"><a href="#" class="text-white">Back to top</a></p> --}}
        </div>
    </footer>

</body>

</html>