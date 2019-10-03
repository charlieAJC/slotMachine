@extends('fronted.layouts.master')

@section('title', 'index')

<<<<<<< HEAD
@section('content')
=======
>>>>>>> 5a799645043d43fb55a078e77f5f157c535672a7
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
<<<<<<< HEAD
=======

>>>>>>> 5a799645043d43fb55a078e77f5f157c535672a7
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

<<<<<<< HEAD
<main role="main">
  <div class="carousel slide" id="demo" data-ride="carousel">
    <div class="slide2Grp">
=======
@section('content')
@csrf
<main role="main">
    <div id="demo" class="carousel slide" data-ride="carousel">
>>>>>>> 5a799645043d43fb55a078e77f5f157c535672a7
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
<<<<<<< HEAD
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
=======
                <img src="https://fakeimg.pl/1920x1080" alt="Los Angeles" width="100%" height="100%">
                <div class="carousel-caption">
                    <h3>A</h3>
                    <p>aaa</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://fakeimg.pl/1920x1080" alt="Chicago" width="100%" height="100%">
                <div class="carousel-caption">
                    <h3>B</h3>
                    <p>bbb</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://fakeimg.pl/1920x1080" alt="New York" width="100%" height="100%">
                <div class="carousel-caption">
                    <h3>C</h3>
                    <p>ccc</p>
                </div>
>>>>>>> 5a799645043d43fb55a078e77f5f157c535672a7
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
<<<<<<< HEAD
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
=======
    
    <div class="album py-5 bg-light">
            <div class="container">
    
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="https://fakeimg.pl/100x225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
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
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
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
>>>>>>> 5a799645043d43fb55a078e77f5f157c535672a7
