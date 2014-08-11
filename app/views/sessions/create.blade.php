@extends('layout.default')
@section('content')
  {{Form::open(['route' => 'sessions.store'])}}
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
        {{Form::label('username', 'Username:', array('class'=>'control-label'))}}
        {{Form::text('username', null, array('class'=>'form-control'))}}
        {{ $errors->first('username'); }}
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
        {{Form::label('password', 'Password:', array('class'=>'control-label'))}}
        {{Form::password('password', array('class'=>'form-control'))}}
        {{ $errors->first('password'); }}
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
        {{Form::submit('Log in', array('class' => 'btn btn-success'))}}
    </div>
  </div>
  {{Form::close()}}
@stop
