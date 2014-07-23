@extends('layout.default')
@section('content')

  <!-- EDIT INCOME-->
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      <h2>Edit Income</div>
    </div>
  </div>
  {{ Form::open(array('route'=>array('income.update', $records[0]->id), 'method'=>'PUT')) }}
      @foreach($records as $record)
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
        <div class="input-group">
            <span class="input-group-addon">$</span>
            {{ Form::text('amount', $record->amount, array('class'=>'form-control')) }}
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
            <!-- adding the "autocomplete" attribute fixes issue in Firefox where 'selected' attribute won't work -->
            <select name="categories" class="form-control" autocomplete="off">
            @foreach($categories as $catId=>$category)
              <option value="{{ $catId }}" {{ ($record->income_id == $catId) ? "selected" : "" }}>{{ $category }}</option>
            @endforeach
            </select>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
            {{ Form::label('description', 'Description:', array('class'=>'control-label')) }}
            {{ Form::text('description', $record->income_desc, array('class'=>'form-control')) }}
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
            {{ Form::submit('Update Record', array('class'=>'btn btn-success')) }}
    </div>
  </div>
     @endforeach
  {{ Form::close() }}
@stop
