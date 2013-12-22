@extends('adminlayout.master')

@section('content')

{{ Form::open(array('url' => URL::current(), 'class' => 'form-horizontal')) }}

<h3>Create New Post</h3>

{{ text_field('title', 'Titel', $blog->title) }}

{{ textarea_field('content', 'Content', $blog->content) }}

<div class="form-group">
	<div class="col-lg-offset-2 col-lg-10">
		<button type="submit" class="btn btn-default">Save</button>
	</div>
</div>

{{ Form::close() }}

@stop