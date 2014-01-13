@extends('bloglayout.master')

@section('content')

@unless($posts->isEmpty())

	@foreach($posts as $post)

	<div class="row">
		<h2>{{ $post->title }}</h2>
		<p>{{ $post->content }}</p>	
	</div>
	@endforeach

@else
	<div class="row">
		<h4 style="color:red">Doesn't have any blog posts for now! Please come back later!</h4>
	</div>
@endif

@stop

@section('footer')
	<p>Copyright <?php echo date("Y") ?> | Developed by Universe.</p>
@stop



