@if($errors->any())
	@foreach($errors->all() as $error)
		<section class="row bg-danger">
			<p>{{$error}}</p>
		</section>
	@endforeach
@endif