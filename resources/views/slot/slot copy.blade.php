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
        <div class="row">
            @include('fronted.layouts.navbar')
            {{-- left --}}
            <div class="col-12 col-sm-3 col-md-3">
                <div class="row">
                    <div class="col-sm-12 money">
                        <img id="chip0" alt="" src="../../img/slot/chip5.png" style="opacity:0.5">
                        <img id="chip1" alt="" src="../../img/slot/chip10.png" style="opacity:0.5">
                        <img id="chip2" alt="" src="../../img/slot/chip50.png" style="opacity:0.5">
                        <img id="chip3" alt="" src="../../img/slot/chip100.png" style="opacity:0.5">
                    </div>
                    <div class="col-sm-12 align-self-end" style="display:flex;justify-content:center">
                        <h3 style="display:inline">chip:</h3>
                        <h3 style="display:inline" id="totalChip">0</h3>
                    </div>
                    <div class="col-sm-12 align-self-end" style="display:flex;justify-content:center">
                        <button id="resetChip" class="btn btn-light">Reset</button>
                    </div>
                </div>   
            </div>
            {{-- middle --}}
            <div class="col-12 col-sm-6 col-md-6">
                <div class="row">
                    <div class="col-sm-12 machine">
                        <img alt="" src="../../img/slot/machine.png">
                        {{-- <div class="casino">
                            <div id="casino1" class="slotMachine">
                                <div id="img1" class="slot slot1"></div>
                            </div>
                            <div id="casino2" class="slotMachine">
                                <div id="img2" class="slot slot2"></div>
                            </div>
                            <div id="casino3" class="slotMachine">
                                <div id="img3" class="slot slot3"></div>
                            </div>
                        </div> --}}

                        <div class="row casino">
                            <div id="casino1" class="slotMachine col-sm-4">
                                <div style="float:right;width:50%;height:50%;">
                                    <div id="img1" class="slot slot1"></div>
                                </div>                           
                            </div>
                            <div id="casino2" class="slotMachine col-sm-4">
                                <div style="margin:0px auto;width:50%;height:50%;">
                                    <div id="img2" class="slot slot2"></div>
                                </div>  
                            </div>
                            <div id="casino3" class="slotMachine col-sm-4">
                                <div style="float:left;width:50%;height:50%;">
                                    <div id="img3" class="slot slot3"></div>
                                </div>  
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 align-self-end btn-group">
                        <button id="casinoShuffle" class="button btn-light col-sm-4">Shuffle!</button>
                        <button id="casinoStop" class="button btn-light col-sm-4">Stop!</button>
                    </div>
                </div>                
            </div>
            {{-- right --}}
            <div class="col-12 col-sm-3 col-md-3">
                <div class="result">
                    <img alt="" src="../../img/slot/winner2.gif">
                </div>
            </div>
        </div>
        @include('fronted.layouts.footer')
    </div>
</body>

</html>