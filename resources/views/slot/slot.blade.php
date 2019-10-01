<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slot/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/slot/jquery.slotmachine.css" type="text/css" media="screen" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/slot/slotmachine.js"></script>

    <title>Document</title>
</head>

<body>
    <div id="casino" style="padding-top:50px;">
        <div class="content">
            <h1>SLOT!</h1>

            <div>
                <div id="casino1" class="slotMachine" style="margin-left: -65px;">
                    <div id="img1" class="slot slot1"></div>
                </div>

                <div id="casino2" class="slotMachine">
                    <div id="img2" class="slot slot2"></div>
                </div>

                <div id="casino3" class="slotMachine">
                    <div id="img3" class="slot slot3"></div>
                </div>

                <div class="btn-group btn-group-justified" role="group">
                    <button id="casinoShuffle" type="button" class="btn btn-primary btn-lg">Shuffle!</button>
                    <button id="casinoStop" type="button" class="btn btn-primary btn-lg">Stop!</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>