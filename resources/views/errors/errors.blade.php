@if($errors->any())
	@foreach($errors->all() as $error)
		<section class="row bg-danger">
			<p class="col-12 text-light text-center">{{$error}}</p>
		</section>
	@endforeach
@endif