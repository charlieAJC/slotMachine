@extends('fronted.layouts.master')

@section('title', 'contact')

@section('content')

<div class="container">
        {{-- <h2 class="mt-4 mb-3">客服中心</h2> --}}
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/">首頁</a>
          </li>
          <li class="breadcrumb-item active">客服中心</li>
        </ol>
        <div class="row">
          <div class="col-lg-8 mb-4">
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://placehold.it/700x400"></iframe>
          </div>
          <div class="col-lg-4 mb-4">
            <h3>聯絡方式</h3>
            <p>
              地　　址：12345 台中市678區90路一段1號2樓
            </p>
            <p>
              客服專線：(01)2345-6789
            </p>
            <p>
              電子郵件：<a href="mailto:name@example.com">name@example.com</a>
            </p>
            <p>
              服務時間：週一至週五 09：00~18：00
            </p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-8 mb-4">
            <h3>遊戲問題回報中心</h3>
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group form-group">
                <div class="controls">
                  <label>遊戲帳號:</label>
                  <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>連絡電話:</label>
                  <input type="tel" class="form-control" id="phone" required data-validation-required-message="請輸入連絡電話">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>聯絡Email:</label>
                  <input type="email" class="form-control" id="email" required data-validation-required-message="請輸入正確可聯絡的email信箱">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>問題內容詳述:</label>
                  <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="請詳述您的問題，以便能更準確了解您的問題並盡快處理回覆" maxlength="999" style="resize:none"></textarea>
                </div>
              </div>
              <div id="success"></div>
              <button type="submit" class="btn btn-primary" id="sendMessageButton">送出</button>
            </form>
          </div>
        </div>    
      </div>

@endsection