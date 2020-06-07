@extends('layout.master')

@section('link')

  <link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">

@endsection  



@section('title')

	ثبت نام 

@endsection


@section('register')

 	<section class="container-fluid bg">

		@include('../errors/errors')


		<section class="d-flex mx-auto col-5 justify-content-center m-5">

			<form action="{{route('register')}}" method="post" class="frm ">
				@csrf
				<h2 class="text-light text-center mb-5">فرم ثبت نام</h2>
				<section class="form-group mb-3 form-inline">
					<label for="name" class="text-light" style="margin-left: 31px;">نام کاربری</label>
					<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="نام کاربری">
					@error('name')
						<div class="alert alert-danger">{{$message}}</div>
					@enderror
				</section>

				<section class="form-group mb-3 form-inline">
					<label for="email" class="text-light" style="margin-left: 59px;">ایمیل</label>
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="ایمیل">
					@error('email')
						<div class="alert alert-danger">{{$message}}</div>
					@enderror
				</section>

				<section class="form-group mb-3 form-inline">
					<label for="password" class="text-light" style="margin-left: 43px;">رمز عبور</label>
					<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder="رمز عبور">
					@error('password')
						<div class="alert alert-danger">{{$message}}</div>
					@enderror
				</section>

				<section class="form-group mb-3 form-inline">
					<label for="password_confirm" class="text-light" style="margin-left: 10px;">تکرار رمز عبور</label>
					<input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder="تکرار رمز عبور">
					@error('password_confirm')
						<div class="alert alert-danger">{{$message}}</div>
					@enderror
				</section>

				<section class="form-group ">
        			<button type="submit" class="btn btn-success btn-block">ثبت نام</button>
      			</section>

			</form>
		</section>		
	</section>
 

@endsection