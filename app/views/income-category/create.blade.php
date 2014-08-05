@extends('layout.default')
@section('content')
  <p>Add Income Category</p>
  <p>At the bottom, show a list of entries by day for the current month and allow user to swipe side-to-side to see daily budget</p>

  {{ Form::open(array('route'=>'income-category.store')) }}
  <div class="row">
    <!--<div class="col-sm-4">
      <div class="input-group">
        <span class="input-group-addon">$</span>
        {{ Form::text('amount', '', array('class'=>'form-control')) }}
      </div>
    </div>
    <div class="col-sm-4">
      {{ Form::select('categories', $categories, '', array('class'=>'form-control'))}}
    </div>
    <div class="col-sm-4">
      {{ Form::hidden('table_name', 'fin_income') }}
      {{ Form::submit('save amount', array('class'=>'form-control btn btn-success')) }}
    </div>-->
  </div>
  {{ Form::close() }}
@stop
