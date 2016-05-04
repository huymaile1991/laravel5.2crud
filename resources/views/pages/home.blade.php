@extends('layouts.master')

@section('content')

	<div class="jumbotron">
		<h1>CRUD en Laravel 5</h1>
		<p class="lead">Demo Laravel.</p>
		<hr> 
		<a href="{{ route('tasks.index') }}" class="btn btn-info">See Tasks</a>
		<a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>
	</div>
	 

@stop