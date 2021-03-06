@extends('layout.default')
@section('content')

  <!-- LIST OF INCOME CATEGORIES-->
  @if(Session::has('message'))
    {{ HTML::userupdate(Session::get('message')) }}
  @endif

  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      <h2>Income Categories</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      <table class="table">
        <thead>
          <tr>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($categories as $catId=>$catVal)
          <tr>
          @if(isset($_GET['category']) && $_GET['category'] == $catId)
          {{ Form::open(array('route'=> array('income-category.update', $catId), 'method'=>'PUT')) }}
            <td>{{ Form::text('category_name', $catVal) }} <br>{{ $errors->first('category_name') }}</td>
            <td>
              {{ Form::submit('Save', ['category'=>$catId, 'class'=>'btn btn-success btn-sm', 'title'=>'Save']) }}&nbsp;
              {{ HTML::linkAction('IncomeCategoryController@index', 'Cancel', null, ['class'=>'btn btn-default btn-sm', 'title'=>'Cancel']) }}
            </td>
          {{ Form::close() }}
          @else
            <td>{{ $catVal }}</td>
            <td>{{ HTML::linkAction('IncomeCategoryController@index', '', ['category'=>$catId], ['class'=>'glyphicon glyphicon-pencil shadow pointer', 'title'=>'Edit']) }}</td>
          @endif
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@stop
