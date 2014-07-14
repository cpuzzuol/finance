@extends('layout.default')

@section('content')
  <h2>Add a new user NOW!</h2>

  {{ Form::open(['route'=>'users.store']) }}
    <div class="row">
      <div class="col-xs-4 col-xs-offset-4">
    {{ Form::label('username', 'Username: ', array('class'=>'control-label')) }}
    {{ Form::text('username', '', array('class'=>'form-control')) }}
    {{ $errors->first('username') }}
      </div>
    </div>
    <div class="row">
      <div class="col-xs-4 col-xs-offset-4">
    {{ Form::label('email', 'E-mail: ', array('class'=>'control-label')) }}
    {{ Form::email('email', '', array('class'=>'form-control')) }}
    {{ $errors->first('email') }}
      </div>
    </div>
    <div class="row">
      <div class="col-xs-4 col-xs-offset-4">
    {{ Form::label('password', 'Password: ', array('class'=>'control-label')) }}
    {{ Form::password('password', array('class'=>'form-control')) }}
    {{ $errors->first('password') }}
       </div>
    </div>
    <div class="row">
      <div class="col-xs-4 col-xs-offset-4">
    <p><strong>Ich stimme den Nutzungsbedienungen zu <strong> {{ Form::checkbox('terms', 'yes', false) }}</p>
    {{ $errors->first('terms') }}
       </div>
    </div>
    <div class="row">
      <div class="col-xs-4 col-xs-offset-4">
    {{ Form::submit('Add User!', array('class' => 'btn btn-primary')) }}
       </div>
    </div>
  {{ Form::close() }}
@stop
