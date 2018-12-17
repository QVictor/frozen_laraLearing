{{-- Temporary --}}
{!! Form::hidden('user_id', 1) !!}
{!! Form::label('title', 'title') !!}
{!! Form::text('title', null, ['class' => 'form-control'])  !!}

{!! Form::label('body', 'body') !!}
{!! Form::textarea('body', null, ['class' => 'form-control'])  !!}

<div class='form-group'>
	{{--textfield published_at--}}
		{!! Form::label('published_at', 'published On') !!}
		{!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control'])  !!}
</div>
<div class='form-group'>	
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])  !!}
</div>