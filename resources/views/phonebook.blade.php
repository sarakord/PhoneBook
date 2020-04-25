<!DOCTYPE html>
<html lang="en">
<head>
  <title>ورود | ثبت نام</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap-reboot.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font.css')}}">
</head>
<body style="font-family: vazir;">

  
<div class="container">
  <div class="row">
    <div class="col-12 pt-5 ">
    	<img src="{{asset('images/logo.jpg')}}"  class="img-fluid mx-auto d-block" style="width: 680px;
    height: 300px;" >
    </div>
  </div>
  <div class="row">
  	<div class="d-flex mx-auto ">
    	<a href="{{asset('login')}}" class="col-6 btn btn-info text-center font-weight-bold mr-5" style="height: 45px;width: 100px; font-size: 14pt;" role="button">ورود</a>
    	<a href="{{asset('register')}}" class="col-6 btn btn-info text-center font-weight-bold" style="height: 45px;
    width: 100px;font-size: 14pt;" role="button">ثبت نام</a>
    </div>
  </div>
</div>

<!--  js file --> 
<script src="{{asset('jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('Bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>

