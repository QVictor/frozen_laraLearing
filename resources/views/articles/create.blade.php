@extends('app')
@section('content')
	<h1>Write a New Articles</h1>

	<hr/>
	<div class='form-group'>
		{{--url in home page--}}
		{!! Form::open(['url' => 'articles']) !!}
			{!! Form::label('title', 'title') !!}
			{!! Form::text('title', null, ['class' => 'form-control'])  !!}
			{!! Form::label('body', 'body') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control'])  !!}
			{!! Form::submit('Ad', ['class' => 'btn btn-primary form-control'])  !!}
		{!! Form::close() !!}
	</div>
	</div>
@endsection