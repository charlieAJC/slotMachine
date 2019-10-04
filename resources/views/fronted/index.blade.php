@extends('fronted.layouts.master')

@section('title', 'index')

@section('content')
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
</style>

<main role="main">
  <div class="carousel slide" id="demo" data-ride="carousel">
    <div class="slide2Grp">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://fakeimg.pl/1920x1080" alt="Los Angeles" width="100%" height="350px">
                {{-- <div class="carousel-caption">
                    <h3>A</h3>
                    <p>aaa</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <img src="https://fakeimg.pl/1920x1080" alt="Chicago" width="100%" height="350px">
                {{-- <div class="carousel-caption">
                    <h3>B</h3>
                    <p>bbb</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <img src="https://fakeimg.pl/1920x1080" alt="New York" width="100%" height="350px">
                {{-- <div class="carousel-caption">
                    <h3>C</h3>
                    <p>ccc</p>
                </div> --}}
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
    
  <div class="album py-5 bg-light">
    <div class="container">  
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://fakeimg.pl/1920x1080" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">ddd</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://fakeimg.pl/1920x1080" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">eee</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
