<!DOCTYPE html>
<html>
<head>
	<title>ورود</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap-reboot.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font.css')}}">
</head>
<body dir="rtl" style="text-align:right;font-family: vazir;">

 	<section class="container-fluid bg">

		@include('../errors/errors')


		<section class="d-flex mx-auto col-5 justify-content-center m-5">

			<form action="{{route('register')}}" method="post" class="frm ">
				@csrf
				<h2 class="text-light text-center mb-5">فرم ورود به سایت</h2>
				<section class="form-group mb-3 form-inline">
					<label for="name" class="text-light" style="margin-left: 31px;">نام کاربری</label>
					<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="نام کاربری">
					@error('name')
						<div class="alert alert-danger form-control error_div">{{$message}}</div>
					@enderror
				</section>

				<section class="form-group mb-3 form-inline">
					<label for="password" class="text-light" style="margin-left: 43px;">رمز عبور</label>
					<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder="رمز عبور">
					@error('password')
						<div class="alert alert-danger error_div">{{$message}}</div>
					@enderror
				</section>

				<section class="form-group ">
        			<button type="submit" class="btn btn-success btn-block ">ثبت نام</button>
      			</section>

			</form>
		</section>		
	</section>
 
<!--  js file --> 
<script src="{{asset('jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('Bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>