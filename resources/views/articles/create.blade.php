@extends('app')
@section('content')
	<h1>Write a New Articles</h1>

	<hr/>
	<div class='form-group'>
		{{--url in home page--}}
		{!! Form::open(['url' => 'articles']) !!}
			@include('form.particlee')

			<div class='form-group'>	
				{!! Form::submit('Ad', ['class' => 'btn btn-primary form-control'])  !!}
			</div>
			
		{!! Form::close() !!}
	</div>
	</div>
	@include('errors.list')
@endsection