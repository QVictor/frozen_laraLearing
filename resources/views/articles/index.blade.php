@extends('app') 
@section('content')
<h1>Article</h1>
<ui>
	@foreach ($articles as $article)
	<article>
		<h2>
			<a href="{{action('ArticlesController@show',[$article->id]) }}">{{$article->title}}</a>
		</h2>
		<div class='body'>
			
			{{$article->body}}
		</div>
	</article>
	@endforeach
</ui>
@endsection