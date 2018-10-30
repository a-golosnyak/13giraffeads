@extends('layouts.main')

@section('content')
	<div class="container">
		<br>
		@if(isset($ads))
			@foreach($ads as $ad)
				<h3 class='ad-post-title'><a href="/{{$ad->id}}">{{$ad->title}}</a></h3>
				<p class='ad-post-meta'>Created {{substr($ad->created_at, 0, strpos($ad->created_at, ' '))}} by {{$ad->author}}</p>
				{{$ad->description}}
				<br>
				<br>
				@guest
                @else
                    @if (Auth::user()->name == $ad->author)
					<a href="delete/{{$ad->id}}"><button class="btn">Delete</button></a> 
					<a href="/edit/{{$ad->id}}"><button class="btn m-x-1">Edit</button></a>
					<br>
					<br>
					@endif
                @endguest
				<hr>
				<br>
				<br>
			@endforeach
			{{ $ads->links() }}
		@endif
	</div>
@endsection