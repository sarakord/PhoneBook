@extends('layout.master')


@section('link')

	<link rel="stylesheet" type="text/css" href="{{asset('css/create.css')}}">

@endsection


@section('title')

	ویرایش اطلاعات مخاطب

@endsection


@section('content')

<div class="container">
	<div class="col-12 well mt-5">
	<div class="row">
				<form action="{{route('contact.update' , $contact->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="col-sm-12">
						<div class="row">

							<div class="col-6 form-group">
								<label>نام</label>
								<input type="text" value="{{$contact->name}}" name="name" class="form-control">
							</div>
	
						</div>					
						
						<div class="row">
							<div class="col-4 form-group">
								<label>شماره منزل<label>
								<input type="text" value="{{$contact->phone}}" name="phone" class="form-control">
							</div>	
							<div class="col-4 form-group">
								<label>شماره موبایل<label>
								<input type="text" value="{{$contact->mobile}}" name="mobile" class="form-control">
							</div>	
							<div class="col-4 form-group">
								<label>شماره فکس</label>
								<input type="text" value="{{$contact->fax}}" name="fax" class="form-control mr-fax">
							</div>		
						</div>

						<div class="form-group">
							<label>آدرس</label>
							<textarea rows="3" name="address" class="form-control">
								{{$contact->address}}
							</textarea>
						</div>	

						<div class="form-group">
							<label>توضیحات</label>
							<textarea rows="3" name="description" class="form-control">
								{{$contact->description}}
							</textarea>
						</div>

						<div class="form-group">
							<label>تصویر مخاطب</label>
							<input type="file" name="image">
							<img src="{{asset('images/contacts/'. $contact->image)}}" style="max-width: 150px;max-height: 200px;">
						</div>
						
					<button type="submit" class="btn btn-success">ویرایش</button>	
					<a href="{{route('home')}}" class="btn btn-warning mr-2">انصراف</a>				
					</div>
				</form> 
				</div>
	</div>
	</div>

@endsection