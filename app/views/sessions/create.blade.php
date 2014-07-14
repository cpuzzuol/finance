@extends('layout.default')
@section('content')
  {{Form::open(['route' => 'sessions.store'])}}
    {{Form::label('username', 'Username:')}}
    {{Form::text('username')}}
{{ $errors->first('username'); }}
    {{Form::label('password', 'Password:')}}
    {{Form::password('password')}}
{{ $errors->first('password'); }}
    {{Form::submit('Log in')}}
  {{Form::close()}}
@stop
