@extends('fronted.layouts.master')

@section('title', 'Update')

@section('content')

<div class="container">
    <h2 class="mt-4 mb-3">Update</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">首頁</a>
        </li>
        <li class="breadcrumb-item active">Update</li>
    </ol>
    <div>
        phone:<input type="text" id="phone">
        <br><br>
        address:<input type="text" id="address">
        <br><br>
        <button id="send">send</button>
    </div>
    
</div>
<br><br>

@endsection