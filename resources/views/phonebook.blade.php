@extends('layout.master')

@section('title')

  دفترچه تلفن

@endsection

@section('phonebook')

  <form action="{{route('logout')}}" method="post">
      @csrf
     <input type="submit" class="btn btn-success" style="margin-right: 10px;text-align:center;width: 60px;" value="خروج">
  </form>

@endsection