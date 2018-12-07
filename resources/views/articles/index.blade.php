@extends('app') 
@section('content')
<h1>Article</h1>
<ui>
	@foreach ($articles as $article)
	<article>
		<h2>
			{{$article->title}}
		</h2>
		<div class='body'>
			{{$article->body}}
		</div>
	</article>
	@endforeach
</ui>
@endsection