@extends('layout.default')
@section('content')

  <!-- CREATE INCOME-->
  @if(Session::has('message'))
    {{ HTML::userupdate(Session::get('message')) }}
  @endif

  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      <h2>Add Income</div>
    </div>
  </div>
  {{ Form::open(array('route'=>'income.store')) }}
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      <div class="input-group">
        <span class="input-group-addon">$</span>
        {{ Form::label('amount', 'Amount', array('class'=>'sr-only')) }}
        {{ Form::text('amount', '', array('class'=>'form-control')) }}
        {{ $errors->first('amount') }}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      {{ Form::label('categories', 'Income Categories', array('class'=>'sr-only')) }}
      {{ Form::select('categories', $categories, '', array('class'=>'form-control'))}}
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      {{ Form::label('description', 'Description:', array('class'=>'control-label')) }}
      {{ Form::text('description', null, array('class'=>'form-control', 'placeholder'=>'i.e. Paycheck No.2')) }}
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      {{ Form::submit('save amount', array('class'=>'btn btn-success')) }}
    </div>
  </div>
  {{ Form::close() }}

@stop
