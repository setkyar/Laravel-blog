@extends('bloglayout.master')

@section('content')

@unless($posts->isEmpty())

	@foreach($posts as $post)

	<div class="page-header">
		<h1>{{ $post->title }}</h1>
	</div>
		<p class="lead">
			{{ $post->content }}
		</p>
		<hr>
		@endforeach

@else
	<h4 class="message">Doesn't have any blog posts for now! Please come back later!</h4>
@endif

@stop

@section('footer')
	<p class="footer">Copyright <?php echo date("Y") ?> | Developed by <a href="{{ URL::to('/about-me') }}">Universe</a>.</p>
@stop




