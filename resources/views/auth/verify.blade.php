@extends('layout.master')

@section('link')

	<link rel="stylesheet" type="text/css" href="{{asset('css/verify.css')}}">

@endsection


@section('title')

	تائید ایمیل

@endsection


@section('verify')


<section class="container-fluid bg">

	<section class="d-flex mx-auto col-5 justify-content-center m-5">
    	<div class="card crd">
                برای فعالسازی حساب کاربری خود روی دکمه زیر کلیک نمایید تا ایمیل فعالسازی برای شما ارسال شود
                <hr>
                @if (session('resent'))
                    <div class="alert alert-success">یک ایمیل برای فعالسازی حساب کاربری شما ارسال شد.ایمیل خود را بررسی و روی لینک
                        فعالسازی حساب کاربری کلیک نمایید
                    </div>
                @endif
                <form action="{{route('verification.resend')}}" method="post">
                    @csrf
                    <div class=" text-center">
                        <button  class="btn btn-primary mb-3" name="button">ارسال لینک فعالسازی</button>
                    </div>

                </form>
     	</div>
			
	</section>		
</section>

@endsection
