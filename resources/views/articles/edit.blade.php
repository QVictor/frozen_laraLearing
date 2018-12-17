@extends('app')

@section('content')
	<h1>Edit: {!! $article->title !!}</h1>

	<div class='form-group'>
		{{--url in home page--}}
		{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
			@include('articles.form',['submitButtonText' => 'Update Article'])
		{!! Form::close() !!}
	</div>
	</div>
	@include('errors.list')
@endsection