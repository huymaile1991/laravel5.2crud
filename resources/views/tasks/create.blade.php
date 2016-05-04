@extends('layouts.master')

@section('content')

    <h1>Add new task</h1>
    <p class="lead">Add to this list. <a href="{{ route('tasks.index') }}">Task list</a></p>
    <hr>

    @include('partials.alerts.errors')
    
    {!! Form::open(['route' => 'tasks.store']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:', ['class'=>'control-label']) !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:', ['class'=>'control-label']) !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop
