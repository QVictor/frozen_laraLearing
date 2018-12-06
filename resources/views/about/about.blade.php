@extends('app')

<h2>People</h2>
<ul>
	@foreach($people as $person)
	<li>{{ $person }}</li>
	@endforeach
</ul>
@section('content')
	<h1>about pages</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt atque quaerat quibusdam, ducimus sunt necessitatibus ullam provident quo facere! Sunt quis minus labore sit. Consequuntur aut odio cum deleniti distinctio?</p>
@stop