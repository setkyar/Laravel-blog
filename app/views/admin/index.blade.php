@extends('adminlayout.master')

@section('content')

	<div class="btn-group">
		<a href="{{ url() }}"><button class="btn btn-default btn-lg" type="button">View Blog</button></a>
  		<a href="{{ URL::to('admin/create') }}"><button class="btn btn-default btn-lg" type="button">Create NewPost</button></a>
	</div>
	<br><br>

@unless($lists->isEmpty())

<table class="table table-bordered table-striped">
	<tr>
		<th>Title</th>
		<th width="15%">Actions</th>
	</tr>
	@foreach($lists as $list)
	<tr>
		<td> {{ $list->title }} </td>
		<td>
			[ <a href="{{ URL::to('admin/edit/') }}/{{ $list->id }}">Edit</a> ]
			|
			[ <a href="{{ URL::to('admin/delete/') }}/{{ $list->id }}">Delete</a> ]
		</td>
	</tr>
	@endforeach
</table>

@else
<h4>Blog Posts are empty now!</h4>
@endif

@stop
