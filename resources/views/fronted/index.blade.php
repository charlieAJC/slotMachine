@extends('fronted.layouts.master')

@section('title', 'index')

@section('content')

<main role="main">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/fronted/c3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/900x500" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/600x1200" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="album py-5 bg-light">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <img src="img/fronted/game.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <button class="button" style="vertical-align:middle"><span>Start Game </span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <img src="img/fronted/game2.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        {{-- <div class="text">
                            <h1 style="font-size:40px">拉霸機</h1>
                            <p>And I'm a Photographer</p>
                            </div> --}}
                        <button class="button" style="vertical-align:middle"><span>Start Game </span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div>

</main>
@endsection
