@extends('app')


@section('content')
	<h1>Write a New Articles</h1>

	<hr/>
	<div class='form-group'>
		{{--url in home page--}}
		{!! Form::open(['url' => 'articles']) !!}
			{{-- @include('form.particlee') --}}
			@include('articles.form', ['submitButtonText' => 'Add Article'])
			{{-- <div class='form-group'>	
				{!! Form::submit('Ad', ['class' => 'btn btn-primary form-control'])  !!}
			</div> --}}
			
		{!! Form::close() !!}
	</div>
	</div>
	@include('errors.list')
@endsection