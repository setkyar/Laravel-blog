@extends('bloglayout.master')

@section('content')

@if(Session::has('message'))
	{{ Session::get('message') }}
@endif

<div class="container">
{{ Form::open(array('url' => URL::current(), 'class'=> 'form-signin')) }}
	<h2 class="form-signin-heading">Please sign in</h2>
     
    {{ Form::text('email', $value="", array('class' => 'input-block-level', 'placeholder' => 'Email address')) }}

    {{ Form::password('password', array('class' => 'input-block-level', 'placeholder' => 'Password')) }}

    <button class="btn btn-large btn-primary" type="submit">Sign in</button>
{{ Form::close() }}
</div>

@stop
