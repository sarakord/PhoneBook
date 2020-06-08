<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap-reboot.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font.css')}}">
  @yield('link')
</head>
<body dir="rtl" style="text-align:right;font-family: vazir;">
 
 	@yield('content')

<!--  js file --> 
<script src="{{asset('jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('Bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>