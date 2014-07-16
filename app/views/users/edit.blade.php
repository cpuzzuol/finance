@extends('layout.default')

@section('content')
  <h2>Edit {{ $newUser[0]->username }}'s Information</h2>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      @foreach($newUser as $user)
      {{ Form::open(array('route'=> array('users.update', $user->id), 'method'=>'PUT')) }}
            {{ Form::text('username', $user->username, array('class'=>'form-control','readonly'=>'readonly')) }}
            {{ Form::email('email', $user->email, array('class'=>'form-control')) }}
            {{ $errors->first('email') }}
            {{ Form::submit('Update User', array('user_id'=>$user->id, 'class'=>'btn btn-success'))}}
      {{ Form::close() }}
      @endforeach
    </div>
  </div>
@stop
