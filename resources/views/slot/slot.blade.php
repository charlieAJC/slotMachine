@extends('fronted.layouts.master')

@section('title', 'slot')

@section('content')

<div id="casino">
    <div class="content">

        <h1>SLOT!</h1>
        <div>
            <div>

            </div>
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
@endsection
