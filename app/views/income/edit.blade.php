@extends('layout.default')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      {{ Form::open(array('route'=>'income.update')) }}
      @foreach($records as $record)
        <div class="input-group">
            <span class="input-group-addon">$</span>
            {{ Form::text('amount', $record->amount, array('class'=>'form-control')) }}
            </div>
            {{ Form::select('categories', $categories, '', array('class'=>'form-control'))}}
            {{ Form::text('description', $record->income_desc) }}
          {{ Form::close() }}
        </div>
      @endforeach
  </div>
@stop
