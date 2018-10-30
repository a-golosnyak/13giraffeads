@extends('layouts.main')

@section('content')
	<div class="container ">
		{!! Form::open(['url' => $action, 'method' => 'post']) !!}
	        <div class='profile-field ' >
	        	<br>
				{{ Form::label('Title', '')}}
				{{ Form::text('title', $title, ['class'=>'form-control', 'placeholder' => 'Tipe title here']) }}
				<br>
				{{ Form::label('Description', '')}}
				{{ Form::textarea('description', $description, ['class'=>'form-control', 'placeholder' => 'Tipe ad here']) }}
				{{ Form::hidden('author', Auth::user()->name, ['class'=>'form-control'])}}
				{{ Form::hidden('id', $id, ['class'=>'form-control'])}}
				<br>
				{{ Form::submit($but, ['class'=>'btn']) }}
			</div>           
	    {!! Form::close() !!}
	</div>
@endsection