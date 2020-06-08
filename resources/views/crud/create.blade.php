@extends('layout.master')


@section('link')

	<link rel="stylesheet" type="text/css" href="{{asset('css/create.css')}}">

@endsection


@section('title')

	مخاطب جدید

@endsection


@section('content')

<div class="container">
	<div class="col-12 well mt-5">
	<div class="row">
				<form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="col-sm-12">
						<div class="row">

							<div class="col-6 form-group">
								<label>نام</label>
								<input type="text" placeholder="نام مخاطب..." name="name" class="form-control">
							</div>
	
						</div>					
						
						<div class="row">
							<div class="col-4 form-group">
								<label>شماره منزل<label>
								<input type="text" placeholder="شماره منزل" name="phone" class="form-control">
							</div>	
							<div class="col-4 form-group">
								<label>شماره موبایل<label>
								<input type="text" placeholder="شماره موبایل" name="mobile" class="form-control">
							</div>	
							<div class="col-4 form-group">
								<label>شماره فکس</label>
								<input type="text" placeholder="شماره فکس"  name="fax" class="form-control mr-fax">
							</div>		
						</div>

						<div class="form-group">
							<label>آدرس</label>
							<textarea placeholder="آدرس..." rows="3" name="address" class="form-control"></textarea>
						</div>	

						<div class="form-group">
							<label>توضیحات</label>
							<textarea placeholder="توضیحات" rows="3" name="description" class="form-control"></textarea>
						</div>

						<div class="form-group">
							<label>تصویر مخاطب</label>
							<input type="file" name="image">
						</div>
						
					<button type="submit" class="btn btn-success">ذخیره</button>	
					<a href="{{route('home')}}" class="btn btn-warning mr-2">انصراف</a>				
					</div>
				</form> 
				</div>
	</div>
	</div>

@endsection