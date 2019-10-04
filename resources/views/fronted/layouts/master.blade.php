<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('css/login.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('css/carousel.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('css/carousel2.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('css/album.css')}}" rel="stylesheet">

</head>

<body>
    @include('fronted.layouts.header')
    @include('fronted.layouts.navbar')
    @yield('content')
    @include('fronted.layouts.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/register.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>

</body>

</html>