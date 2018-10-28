@extends('layouts.main')

@section('content')
	<div class="container">
		<br>
		@if(isset($ads))
			@foreach($ads as $ad)
				<h3 class='ad-post-title'>{{$ad->title}}</h3>
				<p class='ad-post-meta'>Created {{$ad->created_at}} by {{$ad->author}}</p>
				{{$ad->description}}
				<br>
				<br>
				@guest
                @else
                    @if (Auth::user()->name == $ad->author)
					<a href="delete/{{$ad->id}}"><button class="btn" type="submit">Delete</button></a> 
					{{--	<a href="edit/{{$ad->id}}"><button class="btn m-x-1" type="submit">Edit</button></a> --}}
					@endif
                @endguest
			@endforeach
		@endif
	</div>
@endsection