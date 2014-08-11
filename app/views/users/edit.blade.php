@extends('layout.default')

@section('content')

  <!-- EDIT USER -->
  @if(Session::has('message'))
    {{ HTML::userupdate(Session::get('message')) }}
  @endif

  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      <h2>Edit {{ $newUser[0]->username }}'s Information</h2>
    </div>
  </div>

      @foreach($newUser as $user)
      {{ Form::open(array('route'=> array('users.update', $user->id), 'method'=>'PUT')) }}
      <div class="row">
        <div class="col-xs-12 col-sm-offset-4 col-sm-4">
            {{ Form::text('username', $user->username, array('class'=>'form-control','readonly'=>'readonly')) }}
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-offset-4 col-sm-4">
            {{ Form::email('email', $user->email, array('class'=>'form-control')) }}
            {{ $errors->first('email') }}
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-offset-4 col-sm-4">
            {{ Form::submit('Update User', array('user_id'=>$user->id, 'class'=>'btn btn-success'))}}
        </div>
      </div>
      {{ Form::close() }}
      @endforeach
@stop
