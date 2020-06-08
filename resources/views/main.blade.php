 
@extends('layout.master')


@section('title')

  ورود | ثبت نام

@end section


@section('content')

<div class="container">
  <div class="row">
    <div class="col-12 pt-5 ">
      <img src="{{asset('images/logo.jpg')}}"  class="img-fluid mx-auto d-block" style="width: 680px;
    height: 300px;" >
    </div>
  </div>
  <div class="row">
    <div class="d-flex mx-auto ">
      <a href="{{route('login')}}" class="col-6 btn btn-info text-center font-weight-bold mr-5" style="height: 45px;width: 100px; font-size: 14pt;" role="button">ورود</a>
      <a href="{{route('register')}}" class="col-6 btn btn-info text-center font-weight-bold" style="height: 45px;
    width: 100px;font-size: 14pt;" role="button">ثبت نام</a>
    </div>
  </div>
</div>

@endsection

