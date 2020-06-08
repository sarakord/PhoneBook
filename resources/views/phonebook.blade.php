@extends('layout.master')


@section('link')

  <link rel="stylesheet" type="text/css" href="{{asset('css/phonebook.css')}}">

@endsection 


@section('title')

  دفترچه تلفن

@endsection

@section('content')

  @include('message')


  <div class="d-flex justify-content-center">
      <section class="container"> 
            <section class="row">
              @foreach($contacts as $contact)
            
                  <section class="col-3 ">
                      <div class="card mt-4 mr-2 mb-2" style="width:250px">
                          <img class="card-img-top" src="{{asset('images/contacts/'.$contact->image)}}" alt="Card image" style="width:248px;height: 250px;">
                          <div class="card-body">
                              <h4 class="card-title">{{$contact->name}}</h4>
                              <button class="btn btn-primary" data-toggle="modal" data-target="#detail-{{$contact->id}}">نمایش اطلاعات مخاطب</button>
                              @include('modal')
                          </div>
                      </div>
                       </section>
                        
              @endforeach
            </section>
      </section>
  </div>

  {{$contacts->links()}}
  
</div>
 


@endsection
