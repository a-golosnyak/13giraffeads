@extends('layouts.main')

@section('content')
	{!! Form::open(['url' => 'createad/submit']) !!}
        <div class='profile-field ' >
        	<br>
			{{ Form::label('Title', '')}}
			{{ Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Tipe title here']) }}
			<br>
			{{ Form::label('Description', '')}}
			{{ Form::textarea('description', '', ['class'=>'form-control', 'placeholder'=>'Tipe ad here']) }}
			<br>
			{{ Form::submit('Create', ['class'=>'btn']) }}
		</div>           
    {!! Form::close() !!}
@endsection